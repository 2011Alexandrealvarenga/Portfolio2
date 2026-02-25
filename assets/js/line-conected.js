const canvas = document.getElementById("stars-bg");
const ctx = canvas.getContext("2d");
const section = document.getElementById("professional");

function resizeCanvas() {
  canvas.width = section.offsetWidth;
  canvas.height = section.offsetHeight;
}

resizeCanvas();
window.addEventListener("resize", resizeCanvas);

let stars = [];
const numberOfStars = 150;

class Star {
  constructor() {
    this.x = Math.random() * canvas.width;
    this.y = Math.random() * canvas.height;
    this.radius = Math.random() * 4;
    this.dx = (Math.random() - 0.5) * 0.5;
    this.dy = (Math.random() - 0.5) * 0.5;
  }

  draw() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
    ctx.fillStyle = "white";
    ctx.fill();
  }

  update() {
    this.x += this.dx;
    this.y += this.dy;

    if (this.x < 0 || this.x > canvas.width) this.dx *= -1;
    if (this.y < 0 || this.y > canvas.height) this.dy *= -1;

    this.draw();
  }
}

function init() {
  stars = [];
  for (let i = 0; i < numberOfStars; i++) {
    stars.push(new Star());
  }
}

function connectStars() {
  for (let a = 0; a < stars.length; a++) {
    for (let b = a; b < stars.length; b++) {
      let dx = stars[a].x - stars[b].x;
      let dy = stars[a].y - stars[b].y;
      let distance = Math.sqrt(dx * dx + dy * dy);

      if (distance < 300) {
        ctx.strokeStyle = "rgba(255,255,255," + (1 - distance / 300) + ")";
        ctx.lineWidth = 0.5;
        ctx.beginPath();
        ctx.moveTo(stars[a].x, stars[a].y);
        ctx.lineTo(stars[b].x, stars[b].y);
        ctx.stroke();
      }
    }
  }
}

function animate() {
  requestAnimationFrame(animate);
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  stars.forEach(star => star.update());
  connectStars();
}

init();
animate();