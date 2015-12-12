
(function() {
	(function() {
		var Confetti, PI_2, canvas, colors, confetti, context, drawCircle, i, range, resizeWindow, xpos;

		canvas = document.getElementById("confeti");
		context = canvas.getContext("2d");
		window.w = window.innerWidth;
		window.h = window.innerHeight;

	  resizeWindow = function() {
	   	window.w = canvas.width = window.innerWidth;
	   	return window.h = canvas.height = window.innerHeight;
		};

  	window.addEventListener('resize', resizeWindow, false);

  	window.onload = function() {
    	return setTimeout(resizeWindow, 0);
  	};

  	range = function(a, b) {
    	return (b - a) * Math.random() + a;
  	};

  	colors = [[85, 71, 106], [174, 61, 99], [219, 56, 83], [244, 92, 68], [248, 182, 70]];

  	PI_2 = 2 * Math.PI;

  	drawCircle = function(x, y, r, style) {
    	context.beginPath();
    	context.arc(x, y, r, 0, PI_2, false);
    	context.fillStyle = style;
    	return context.fill();
  	};

  	xpos = 0.5;

	  document.onmousemove = function(e) {
	    return xpos = e.pageX / w;
	  };

	  window.requestAnimationFrame = (function() {
	    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
	      return window.setTimeout(callback, 1000 / 60);
	    };
	  })();

	  Confetti = (function() {

	    function Confetti() {
	      this.style = colors[~~range(0, 5)];
	      this.rgb = "rgba(" + this.style[0] + "," + this.style[1] + "," + this.style[2];
	      this.r = ~~range(2, 6);
	      this.replace();
	    }

	    Confetti.prototype.replace = function() {
	      this.opacity = 0;
	      this.dop = 0.03 * range(1, 5);
	      this.x = range(-2 * this.r, w - 2 * this.r);
	      this.y = range(-2 * this.r, h - 2 * this.r);
	      this.xmax = w - this.r;
	      this.ymax = h - this.r;
	      this.vx = 2 * Math.random() + 10 * xpos - 6;
	      return this.vy = this.r + range(-1, 1);
	    };

	    Confetti.prototype.draw = function() {
	      var _ref;
	      this.x += this.vx;
	      this.y += this.vy;
	      this.opacity += this.dop;
	      if (this.opacity > 1) {
	        this.opacity = 1;
	        this.dop *= -1;
	      }
	      if (this.opacity < 0 || this.y > this.ymax || !((0 < (_ref = this.x) && _ref < this.xmax))) {
	        this.replace();
	      }
	      return drawCircle(~~this.x, ~~this.y, this.r, "" + this.rgb + "," + this.opacity + ")");
	    };

	    return Confetti;

	  })();

	  confetti = (function() {
	    var _results;
	    _results = [];
	    for (i = 1; i <= 300; i++) {
	      _results.push(new Confetti);
	    }
	    return _results;
	  })();

	  window.step = function() {
	    var c, _i, _len, _results;
	    requestAnimationFrame(step);
	    context.clearRect(0, 0, w, h);
	    _results = [];
	    for (_i = 0, _len = confetti.length; _i < _len; _i++) {
	      c = confetti[_i];
	      _results.push(c.draw());
	    }
	    return _results;
	  };

	  step();

	}).call(this);

})();


// =============================================



window.addEventListener("resize", resizeCanvas, false);
        window.addEventListener("DOMContentLoaded", onLoad, false);
        
        window.requestAnimationFrame = 
            window.requestAnimationFrame       || 
            window.webkitRequestAnimationFrame || 
            window.mozRequestAnimationFrame    || 
            window.oRequestAnimationFrame      || 
            window.msRequestAnimationFrame     || 
            function (callback) {
                window.setTimeout(callback, 1000/60);
            };
        
        var canvas, ctx, w, h, particles = [], probability = 0.04,
            xPoint, yPoint;
        
        function onLoad() {
            canvas = document.getElementById("canvas");
            ctx = canvas.getContext("2d");
            resizeCanvas();
            
            window.requestAnimationFrame(updateWorld);
        } // fin de onLoad();
        
        function resizeCanvas() {
            if (!!canvas) {
                w = canvas.width = window.innerWidth;
                h = canvas.height = window.innerHeight*0.8;
            }
        } // fin de resizeCanvas();
        
        function updateWorld() {
            update();
            paint();
            window.requestAnimationFrame(updateWorld);
        } // fin de update();
        
        function update() {
            if (particles.length < 500 && Math.random() < probability) {
                createFirework();
            }
            var alive = [];
            for (var i=0; i<particles.length; i++) {
                if (particles[i].move()) {
                    alive.push(particles[i]);
                }
            }
            particles = alive;
        } // fin de update();
        
        function paint() {
            ctx.globalCompositeOperation = 'source-over';
            ctx.fillStyle = "rgba(0, 0, 0, 0.2)";
            ctx.fillRect(0, 0, w, h);
            ctx.globalCompositeOperation = 'lighter';
            for (var i=0; i<particles.length; i++) {
                particles[i].draw(ctx);
            }
        } // fin de paint();
        
        function createFirework() {
            xPoint = Math.random()*(w-200)+100;
            yPoint = Math.random()*(h-200)+100;
            var nFire = Math.random()*50+100;
            var c = "rgb("+(~~(Math.random()*200+55))+","
                 +(~~(Math.random()*200+55))+","+(~~(Math.random()*200+55))+")";
            for (var i=0; i<nFire; i++) {
                var particle = new Particle();
                particle.color = c;
                var vy = Math.sqrt(25-particle.vx*particle.vx);
                if (Math.abs(particle.vy) > vy) {
                    particle.vy = particle.vy>0 ? vy: -vy;
                }
                particles.push(particle);
            }
        } // fin de createParticles();
        
        function Particle() {
            this.w = this.h = Math.random()*4+1;
            // Position
            this.x = xPoint-this.w/2;
            this.y = yPoint-this.h/2;
            // Velocidades x e y entre -5 y +5
            this.vx = (Math.random()-0.5)*10;
            this.vy = (Math.random()-0.5)*10;
            // Tiempo de vida
            this.alpha = Math.random()*.5+.5;
            // color
            this.color;
        } // fin de Particle();
        
        Particle.prototype = {
            gravity: 0.05,
            move: function () {
                this.x += this.vx;
                this.vy += this.gravity;
                this.y += this.vy;
                this.alpha -= 0.01;
                if (this.x <= -this.w || this.x >= screen.width ||
                    this.y >= screen.height ||
                    this.alpha <= 0) {
                        return false;
                }
                return true;
            },
            draw: function (c) {
                c.save();
                c.beginPath();
                
                c.translate(this.x+this.w/2, this.y+this.h/2);
                c.arc(0, 0, this.w, 0, Math.PI*2);
                c.fillStyle = this.color;
                c.globalAlpha = this.alpha;
                
                c.closePath();
                c.fill();
                c.restore();
            }
        } // fin de Particle.prototype;