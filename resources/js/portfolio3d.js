import * as THREE from 'three';

// Global variables to track mouse and scroll
const mouse = { x: 0, y: 0, targetX: 0, targetY: 0 };
const scroll = { y: 0, targetY: 0 };

// Track mouse movements
window.addEventListener('mousemove', (event) => {
    mouse.targetX = (event.clientX / window.innerWidth) * 2 - 1;
    mouse.targetY = -(event.clientY / window.innerHeight) * 2 + 1;
});

// Track scroll
window.addEventListener('scroll', () => {
    scroll.targetY = window.scrollY;
});

// Initialize Background Canvas (Floating Particle Stars)
function initBackground() {
    const canvas = document.getElementById('three-bg-canvas');
    if (!canvas) return null;

    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        alpha: true,
        antialias: true
    });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.setSize(window.innerWidth, window.innerHeight);

    const scene = new THREE.Scene();

    // Camera
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 100);
    camera.position.z = 30;

    // Detect active page formation
    const path = window.location.pathname.toLowerCase();
    let formation = 'home';
    if (path.includes('about')) {
        formation = 'about';
    } else if (path.includes('project')) {
        formation = 'projects';
    } else if (path.includes('experience')) {
        formation = 'experience';
    } else if (path.includes('skill')) {
        formation = 'skills';
    } else if (path.includes('contact')) {
        formation = 'contact';
    }

    // Geometry
    const count = 400;
    const positions = new Float32Array(count * 3);
    const targetPositions = new Float32Array(count * 3);
    const randomSpeeds = new Float32Array(count);
    const colors = new Float32Array(count * 3);

    const color1 = new THREE.Color('#10b981'); // Emerald
    const color2 = new THREE.Color('#14b8a6'); // Teal
    const color3 = new THREE.Color('#6366f1'); // Indigo

    for (let i = 0; i < count; i++) {
        // Start randomly (as initial cloud)
        positions[i * 3] = (Math.random() - 0.5) * 80;
        positions[i * 3 + 1] = (Math.random() - 0.5) * 80;
        positions[i * 3 + 2] = (Math.random() - 0.5) * 80;

        randomSpeeds[i] = 0.02 + Math.random() * 0.05;

        // Calculate Target Position based on formation
        if (formation === 'about') {
            // Double Helix / Knowledge Column
            const t = (i / count) * Math.PI * 12;
            const radius = 7;
            const height = (i / count) * 45 - 22.5;
            const isHelixA = i % 2 === 0;
            const angle = isHelixA ? t : t + Math.PI;
            targetPositions[i * 3] = Math.cos(angle) * radius;
            targetPositions[i * 3 + 1] = height;
            targetPositions[i * 3 + 2] = Math.sin(angle) * radius;
        } else if (formation === 'projects' || formation === 'experience') {
            // Wavy 3D Landscape
            const rowCount = 20;
            const colCount = Math.floor(count / rowCount);
            const row = Math.floor(i / colCount);
            const col = i % colCount;
            targetPositions[i * 3] = (col - colCount / 2) * 3.5;
            targetPositions[i * 3 + 2] = (row - rowCount / 2) * 3.5;
            targetPositions[i * 3 + 1] = Math.sin(col * 0.4) * Math.cos(row * 0.4) * 4 - 6;
        } else if (formation === 'skills') {
            // Constellation Sphere
            const u = Math.random();
            const v = Math.random();
            const theta = u * 2.0 * Math.PI;
            const phi = Math.acos(2.0 * v - 1.0);
            const r = 16;
            targetPositions[i * 3] = r * Math.sin(phi) * Math.cos(theta);
            targetPositions[i * 3 + 1] = r * Math.sin(phi) * Math.sin(theta);
            targetPositions[i * 3 + 2] = r * Math.cos(phi);
        } else if (formation === 'contact') {
            // Vortex Funnel Storm
            const angle = (i / count) * Math.PI * 24;
            const radius = (i / count) * 14 + 1.5;
            const height = (i / count) * 45 - 22.5;
            targetPositions[i * 3] = Math.cos(angle) * radius;
            targetPositions[i * 3 + 1] = height;
            targetPositions[i * 3 + 2] = Math.sin(angle) * radius;
        } else {
            // Standard Home Nebula Cloud
            targetPositions[i * 3] = (Math.random() - 0.5) * 50;
            targetPositions[i * 3 + 1] = (Math.random() - 0.5) * 50;
            targetPositions[i * 3 + 2] = (Math.random() - 0.5) * 50;
        }

        // Custom colors
        const mixRatio = Math.random();
        let pointColor;
        if (mixRatio < 0.33) {
            pointColor = color1;
        } else if (mixRatio < 0.66) {
            pointColor = color2;
        } else {
            pointColor = color3;
        }

        colors[i * 3] = pointColor.r;
        colors[i * 3 + 1] = pointColor.g;
        colors[i * 3 + 2] = pointColor.b;
    }

    const geometry = new THREE.BufferGeometry();
    geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));

    // Particle texture
    const canvasTexture = document.createElement('canvas');
    canvasTexture.width = 16;
    canvasTexture.height = 16;
    const ctx = canvasTexture.getContext('2d');
    const gradient = ctx.createRadialGradient(8, 8, 0, 8, 8, 8);
    gradient.addColorStop(0, 'rgba(255, 255, 255, 1)');
    gradient.addColorStop(0.3, 'rgba(16, 185, 129, 0.8)');
    gradient.addColorStop(1, 'rgba(0, 0, 0, 0)');
    ctx.fillStyle = gradient;
    ctx.fillRect(0, 0, 16, 16);
    const texture = new THREE.CanvasTexture(canvasTexture);

    // Material
    const material = new THREE.PointsMaterial({
        size: 0.35,
        sizeAttenuation: true,
        vertexColors: true,
        transparent: true,
        opacity: 0.8,
        depthWrite: false,
        blending: THREE.AdditiveBlending,
        map: texture
    });

    const points = new THREE.Points(geometry, material);
    scene.add(points);

    // Lights
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
    scene.add(ambientLight);

    // Handle resizing
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });

    return {
        tick: (elapsedTime) => {
            // Smoothly interpolate mouse and scroll values
            mouse.x += (mouse.targetX - mouse.x) * 0.05;
            mouse.y += (mouse.targetY - mouse.y) * 0.05;
            scroll.y += (scroll.targetY - scroll.y) * 0.05;

            // Morph particles to their target formation on page load
            const posArray = geometry.attributes.position.array;
            const lerpSpeed = Math.min(elapsedTime * 0.4, 1.0) * 0.05;

            for (let i = 0; i < count; i++) {
                posArray[i * 3] += (targetPositions[i * 3] - posArray[i * 3]) * lerpSpeed;
                posArray[i * 3 + 1] += (targetPositions[i * 3 + 1] - posArray[i * 3 + 1]) * lerpSpeed;
                posArray[i * 3 + 2] += (targetPositions[i * 3 + 2] - posArray[i * 3 + 2]) * lerpSpeed;

                // Drift waves/rotations on top of target formation once morphed
                if (elapsedTime > 2.5) {
                    if (formation === 'projects' || formation === 'experience') {
                        // Flowing landscape waves
                        const rowCount = 20;
                        const colCount = Math.floor(count / rowCount);
                        const col = i % colCount;
                        posArray[i * 3 + 1] = targetPositions[i * 3 + 1] + Math.sin(elapsedTime + col * 0.4) * 0.6;
                    } else if (formation === 'skills' || formation === 'contact' || formation === 'about') {
                        // Helix/Sphere/Storm orbital rotation
                        const tempX = posArray[i * 3];
                        const tempZ = posArray[i * 3 + 2];
                        const rotateSpeed = 0.003;
                        posArray[i * 3] = tempX * Math.cos(rotateSpeed) - tempZ * Math.sin(rotateSpeed);
                        posArray[i * 3 + 2] = tempX * Math.sin(rotateSpeed) + tempZ * Math.cos(rotateSpeed);
                    } else {
                        // Standard home starfield falling down
                        posArray[i * 3 + 1] -= randomSpeeds[i] * 0.08;
                        if (posArray[i * 3 + 1] < -30) {
                            posArray[i * 3 + 1] = 30;
                        }
                    }
                }
            }
            geometry.attributes.position.needsUpdate = true;

            // Parallax movement of camera based on mouse and scroll
            camera.position.x = mouse.x * 5;
            camera.position.y = -mouse.y * 5 - (scroll.y * 0.015);
            camera.lookAt(0, 0, 0);

            renderer.render(scene, camera);
        }
    };
}

// Initialize Hero Canvas (Interactive 3D Dodecahedron / Crystal)
function initHero3D() {
    const canvas = document.getElementById('three-hero-canvas');
    if (!canvas) return null;

    const rect = canvas.getBoundingClientRect();
    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        alpha: true,
        antialias: true
    });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.setSize(rect.width, rect.height);

    const scene = new THREE.Scene();

    // Camera
    const camera = new THREE.PerspectiveCamera(45, rect.width / rect.height, 0.1, 100);
    camera.position.z = 8;

    // Outer wireframe geometric structure
    const outerGeometry = new THREE.IcosahedronGeometry(2, 1);
    const outerMaterial = new THREE.MeshBasicMaterial({
        color: 0x10b981,
        wireframe: true,
        transparent: true,
        opacity: 0.35
    });
    const outerMesh = new THREE.Mesh(outerGeometry, outerMaterial);
    scene.add(outerMesh);

    // Inner glowing solid mesh (crystal core)
    const innerGeometry = new THREE.IcosahedronGeometry(1.2, 0);
    const innerMaterial = new THREE.MeshPhysicalMaterial({
        color: 0x14b8a6,
        metalness: 0.1,
        roughness: 0.15,
        transmission: 0.6,
        thickness: 0.5,
        transparent: true,
        opacity: 0.9,
        flatShading: true,
        clearcoat: 1.0,
        clearcoatRoughness: 0.1
    });
    const innerMesh = new THREE.Mesh(innerGeometry, innerMaterial);
    scene.add(innerMesh);

    // Subtle particle cloud orbiting around the core
    const orbitalCount = 50;
    const orbitalGeometry = new THREE.BufferGeometry();
    const orbitalPositions = new Float32Array(orbitalCount * 3);
    const radius = 2.5;

    for (let i = 0; i < orbitalCount; i++) {
        const u = Math.random();
        const v = Math.random();
        const theta = u * 2.0 * Math.PI;
        const phi = Math.acos(2.0 * v - 1.0);
        
        orbitalPositions[i * 3] = radius * Math.sin(phi) * Math.cos(theta);
        orbitalPositions[i * 3 + 1] = radius * Math.sin(phi) * Math.sin(theta);
        orbitalPositions[i * 3 + 2] = radius * Math.cos(phi);
    }
    
    orbitalGeometry.setAttribute('position', new THREE.BufferAttribute(orbitalPositions, 3));
    const orbitalTextureCanvas = document.createElement('canvas');
    orbitalTextureCanvas.width = 8;
    orbitalTextureCanvas.height = 8;
    const otCtx = orbitalTextureCanvas.getContext('2d');
    const otGrad = otCtx.createRadialGradient(4, 4, 0, 4, 4, 4);
    otGrad.addColorStop(0, 'rgba(255, 255, 255, 1)');
    otGrad.addColorStop(1, 'rgba(20, 184, 166, 0)');
    otCtx.fillStyle = otGrad;
    otCtx.fillRect(0, 0, 8, 8);
    
    const orbitalMaterial = new THREE.PointsMaterial({
        size: 0.25,
        sizeAttenuation: true,
        transparent: true,
        opacity: 0.8,
        blending: THREE.AdditiveBlending,
        map: new THREE.CanvasTexture(orbitalTextureCanvas)
    });
    const orbitalPoints = new THREE.Points(orbitalGeometry, orbitalMaterial);
    scene.add(orbitalPoints);

    // Interactive Drag Controls
    let isDragging = false;
    let previousMousePosition = { x: 0, y: 0 };
    
    canvas.addEventListener('mousedown', (e) => {
        isDragging = true;
        previousMousePosition = { x: e.clientX, y: e.clientY };
    });
    
    canvas.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        const deltaMove = {
            x: e.clientX - previousMousePosition.x,
            y: e.clientY - previousMousePosition.y
        };
        
        innerMesh.rotation.y += deltaMove.x * 0.005;
        innerMesh.rotation.x += deltaMove.y * 0.005;
        outerMesh.rotation.y += deltaMove.x * 0.003;
        outerMesh.rotation.x += deltaMove.y * 0.003;
        
        previousMousePosition = { x: e.clientX, y: e.clientY };
    });
    
    window.addEventListener('mouseup', () => {
        isDragging = false;
    });

    // Touch support
    canvas.addEventListener('touchstart', (e) => {
        if (e.touches.length === 1) {
            isDragging = true;
            previousMousePosition = { x: e.touches[0].clientX, y: e.touches[0].clientY };
        }
    });

    canvas.addEventListener('touchmove', (e) => {
        if (!isDragging || e.touches.length !== 1) return;
        const deltaMove = {
            x: e.touches[0].clientX - previousMousePosition.x,
            y: e.touches[0].clientY - previousMousePosition.y
        };
        
        innerMesh.rotation.y += deltaMove.x * 0.005;
        innerMesh.rotation.x += deltaMove.y * 0.005;
        outerMesh.rotation.y += deltaMove.x * 0.003;
        outerMesh.rotation.x += deltaMove.y * 0.003;
        
        previousMousePosition = { x: e.touches[0].clientX, y: e.touches[0].clientY };
    });

    canvas.addEventListener('touchend', () => {
        isDragging = false;
    });

    // Lights
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.4);
    scene.add(ambientLight);

    const dirLight1 = new THREE.DirectionalLight(0x10b981, 1.5);
    dirLight1.position.set(5, 5, 5);
    scene.add(dirLight1);

    const dirLight2 = new THREE.DirectionalLight(0x6366f1, 1.2);
    dirLight2.position.set(-5, -5, 2);
    scene.add(dirLight2);

    // Hover effect
    let isHovered = false;
    let targetScale = 1.0;
    
    canvas.addEventListener('mouseenter', () => {
        isHovered = true;
        targetScale = 1.25;
        canvas.style.cursor = 'grab';
    });
    
    canvas.addEventListener('mouseleave', () => {
        isHovered = false;
        targetScale = 1.0;
        canvas.style.cursor = 'default';
    });

    canvas.addEventListener('mousedown', () => {
        if (isHovered) canvas.style.cursor = 'grabbing';
    });
    canvas.addEventListener('mouseup', () => {
        if (isHovered) canvas.style.cursor = 'grab';
    });

    // Resize observer
    const resizeObserver = new ResizeObserver((entries) => {
        for (let entry of entries) {
            camera.aspect = entry.contentRect.width / entry.contentRect.height;
            camera.updateProjectionMatrix();
            renderer.setSize(entry.contentRect.width, entry.contentRect.height);
        }
    });
    resizeObserver.observe(canvas);

    return {
        tick: (elapsedTime) => {
            if (!isDragging) {
                innerMesh.rotation.y += 0.003;
                innerMesh.rotation.x += 0.001;
                outerMesh.rotation.y -= 0.001;
                outerMesh.rotation.x -= 0.002;
            }

            orbitalPoints.rotation.y = elapsedTime * 0.15;
            orbitalPoints.rotation.x = elapsedTime * 0.05;

            const bobbing = Math.sin(elapsedTime * 1.5) * 0.15;
            innerMesh.position.y = bobbing;
            outerMesh.position.y = bobbing;
            orbitalPoints.position.y = bobbing;

            const targetRotationX = -mouse.y * 0.4;
            const targetRotationY = mouse.x * 0.4;

            if (!isDragging) {
                innerMesh.rotation.x += (targetRotationX - innerMesh.rotation.x) * 0.05;
                innerMesh.rotation.y += (targetRotationY - innerMesh.rotation.y) * 0.05;
            }

            const currentScale = innerMesh.scale.x;
            const newScale = currentScale + (targetScale - currentScale) * 0.1;
            innerMesh.scale.set(newScale, newScale, newScale);
            
            const outerTargetScale = targetScale * 1.05;
            const currentOuterScale = outerMesh.scale.x;
            const newOuterScale = currentOuterScale + (outerTargetScale - currentOuterScale) * 0.1;
            outerMesh.scale.set(newOuterScale, newOuterScale, newOuterScale);

            // Fade / slide on scroll
            const scrollPercent = Math.min(scroll.y / 800, 1.0);
            outerMaterial.opacity = 0.35 * (1.0 - scrollPercent * 0.8);
            innerMaterial.opacity = 0.9 * (1.0 - scrollPercent * 0.8);
            orbitalMaterial.opacity = 0.8 * (1.0 - scrollPercent * 0.8);

            innerMesh.position.y += scroll.y * -0.002;
            outerMesh.position.y += scroll.y * -0.002;
            orbitalPoints.position.y += scroll.y * -0.002;

            renderer.render(scene, camera);
        }
    };
}

// Master Loop & Dynamic 3D CSS Scroll Reveals / Interactive Hover Tilts
document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize Three.js Scenes
    const bgCanvas = initBackground();
    const heroCanvas = initHero3D();

    const clock = new THREE.Clock();

    const tick = () => {
        const elapsedTime = clock.getElapsedTime();

        if (bgCanvas) bgCanvas.tick(elapsedTime);
        if (heroCanvas) heroCanvas.tick(elapsedTime);

        window.requestAnimationFrame(tick);
    };

    tick();

    // 2. Dynamic 3D Scroll Reveal Initialization
    const revealCandidates = document.querySelectorAll(
        'section, .group, h1, h2, form, .grid > div, .space-y-8 > div, .space-y-4 > div'
    );

    revealCandidates.forEach(el => {
        // Skip header/navbar and canvas
        if (el.tagName === 'HEADER' || el.id === 'three-bg-canvas' || el.closest('header')) return;
        
        el.classList.add('reveal-3d');
    });

    const observerOptions = {
        threshold: 0.05,
        rootMargin: '0px 0px -40px 0px'
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal-3d').forEach(el => revealObserver.observe(el));

    // 3. Dynamic 3D Card Hover Tilts
    const tiltContainers = document.querySelectorAll('.group, .grid > div, .rounded-xl, .border-white\\/10');

    tiltContainers.forEach(card => {
        // Skip core templates / background structure
        if (
            card.id === 'three-bg-canvas' || 
            card.id === 'three-hero-canvas' || 
            card.closest('header') || 
            card.tagName === 'SECTION' ||
            card.classList.contains('backdrop-blur-sm') && card.parentElement.id === 'about'
        ) return;

        card.classList.add('tilt-3d');

        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const xc = rect.width / 2;
            const yc = rect.height / 2;
            
            // Calculate rotational tilt limit (max 8 degrees for clean aesthetics)
            const angleX = -(y - yc) / yc * 8;
            const angleY = (x - xc) / xc * 8;
            
            card.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) scale3d(1.02, 1.02, 1.02)`;
            card.style.boxShadow = '0 20px 40px rgba(16, 185, 129, 0.15)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
            card.style.boxShadow = 'none';
        });
    });
});
