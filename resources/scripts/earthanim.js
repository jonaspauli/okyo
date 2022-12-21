/// Startseite
    
gsap.registerPlugin(ScrollTrigger);
    
    
const canvas = document.querySelector('.okyo-scrolling');
const context = canvas.getContext("2d");

canvas.width = 1920;
canvas.height = 1080;

const frameCount = 296;
const currentFrame = index => (
    `anim/anim_${index.toString().padStart(3, '0')}.jpg`
);

const images = []
const okyoanim = {
  frame: 0
};

for (let i = 0; i < frameCount; i++) {
  const img = new Image();
  img.src = currentFrame(i);
  images.push(img);
}

gsap.to(okyoanim, {
  frame: frameCount - 1,
  pin: true,
  snap: "frame",
  ease: "none",
  scrollTrigger: {
    scrub: 0.2
  },
  onUpdate: render // use animation onUpdate instead of scrollTrigger's onUpdate
});

images[0].onload = render;

function render() {
  context.clearRect(0, 0, canvas.width, canvas.height);
  context.drawImage(images[okyoanim.frame], 0, 0); 
};