 
    var canvas = document.createElement('canvas')
var canvas2 = document.createElement('canvas')
document.getElementsByTagName('body')[0].appendChild(canvas)
document.getElementsByTagName('body')[0].appendChild(canvas2)
var ctx = canvas.getContext('2d')
var ctx2 = canvas2.getContext('2d')

var numParticles = 6

var bg = [30, 30, 30]
// var cols = ['#ff0000', '#ff0000', '#ff0000', '#ff0000', '#ff0000', '#ff9900', '#ffffff', '#990000']
var cols = ['#FF5722', '#FF9800', '#FF9800', '#FF9800', '#FF9800', '#B71C1C', '#00BCD4', '#00BCD4', '#009688']

setup()
window.addEventListener('resize', setup)

function setup() {
  canvas.width = canvas2.width = window.innerWidth
  canvas.height = canvas2.height = window.innerHeight
  ctx.beginPath();
  ctx.rect(0, 0, canvas.width, canvas.height)
  ctx.fillStyle = `rgba(${bg[0]}, ${bg[1]}, ${bg[2]}, ${1})`
  ctx.fill()
}

var mouse = {
  x: canvas.width/2,
  y: canvas.height/2
}
document.onmousemove = function(e){
  mouse = {x: e.pageX, y: e.pageY}
}

// window.requestAnimationFrame(animate);

setInterval(animate, 1000/29.9)
function animate() {
  fade(0.3)
  draw()
  // window.requestAnimationFrame(function(){animate()})
}

function fade(amt) {
  ctx.beginPath();
  ctx.rect(0, 0, canvas.width, canvas.height)
  ctx.fillStyle = `rgba(${bg[0]}, ${bg[1]}, ${bg[2]}, ${amt})`
  ctx.fill()
}

function Particle () {
  this.pos = {
    x: Math.random() * canvas.width * 0.8 + canvas.width * 0.1,
    y: Math.random() * canvas.height * 0.8 + canvas.height * 0.1
  }
  this.r = 1
  this.speed = 6
  this.step = Math.random() * 400
  this.vx = Math.random() * this.speed/4 - this.speed/8
  this.vy = Math.random() * this.speed/4 - this.speed/8
  this.colIndex = Math.floor(Math.random()*cols.length)
  this.history = []
  this.update = function () {
    //////////////////////////////////////
    this.step ++
    this.step %= 400
    if (this.history.length > 5){
      this.history.shift()
    }
    this.pos.x += this.vx
    this.pos.y += this.vy
    this.vx = this.vx * 0.98 + (Math.random() * this.speed * 2 - this.speed) * 0.12
    this.vy = this.vy * 0.98 + (Math.random() * this.speed * 2 - this.speed) * 0.12
    
    var dx = mouse.x - this.pos.x 
    var dy = mouse.y - this.pos.y 
    if(this.step > 365) {
      //mouse
      this.vx = this.vx * 0.9 + dx * 0.004
      this.vy = this.vy * 0.9 + dy * 0.004
      this.vx = Math.min(this.vx,  4.0)
      this.vx = Math.max(this.vx, -4.0)
      this.vy = Math.min(this.vy,  4.0)
      this.vy = Math.max(this.vy, -4.0)
      // center
      // this.vx = this.vx * 0.9 + (canvas.width/2 - this.pos.x ) * 0.002
      // this.vy = this.vy * 0.9 + (canvas.height/2 - this.pos.y ) * 0.002
    }
    
    if(this.step > 100 && this.step < 110) {
      //mouse
      var d = dx * dx + dy * dy
      if (d < (canvas.height/8 * canvas.height/8)){
        this.vx = this.vx * 0.9 - (mouse.x - this.pos.x ) * 0.002
        this.vy = this.vy * 0.9 - (mouse.y - this.pos.y ) * 0.002
      }
      // center
      // this.vx = this.vx * 0.9 + (canvas.width/2 - this.pos.x ) * 0.002
      // this.vy = this.vy * 0.9 + (canvas.height/2 - this.pos.y ) * 0.002
    }
    
    //////////////////////////////////////
    if (this.history.length > 4){
      ctx.beginPath()
      ctx.moveTo(this.pos.x ,this.pos.y)
      for (var i = this.history.length-1; i >= 0;  i--){
        ctx.lineTo(this.history[i].x ,this.history[i].y)
      }
      // ctx.fillStyle = `hsla(${Math.sin( this.step / 300) * 70 + 70},${99}%,${50}%,1)`
      // ctx.strokeStyle = `hsla(${Math.sin( this.step / 300) * 70 + 70},${99}%,${50}%,0.5)`
      ctx.fillStyle = cols[this.colIndex] 
      ctx.strokeStyle = cols[this.colIndex] 
      ctx.fill()
      ctx.lineWidth = 2
      ctx.lineJoin = "round"
      // ctx.closePath()
      ctx.stroke()
      
      // orb
      ctx2.beginPath()
      ctx2.fillStyle = `rgba(250,250,250,0.05)`
      ctx2.fillStyle = cols[this.colIndex]
      
      ctx2.arc(this.history[4].x ,this.history[4].y , 13.4, 0, 2 * Math.PI)
      ctx2.fill()
      
    }
    
    //////////////////////////////////////
    if (this.pos.x > canvas.width || this.pos.x < 0 || this.pos.y > canvas.height || this.pos.y < 0) {
      delete this.pos
      delete this.history
      return false;
    }
    this.history.push({
      x: this.pos.x,
      y: this.pos.y
    })
    return true;
  } 
}

var particles = [new Particle()]


function draw() {
  if (particles.length < numParticles) {
    particles.push(new Particle())
  }
  
  ctx2.clearRect(0,0,canvas.width,canvas.height);
  // ctx2.shadowBlur = 1;
  // ctx2.shadowColor = '#000'; 
  ctx2.globalAlpha = 0.1
  
  particles = particles.filter(function (p){
    return p.update()
  })
  
}
    
    
     