<canvas id="bgc" class="fixed inset-0 z-0 pointer-events-none w-full h-full"></canvas>
<div class="fixed inset-0 z-0 pointer-events-none flex items-start justify-center">
  <div class="animate-pulse w-[700px] h-[700px] rounded-full -translate-y-1/3
              bg-[radial-gradient(circle,rgba(220,185,90,0.55)_0%,rgba(201,168,76,0.22)_35%,transparent_68%)]">
  </div>
</div>
<div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
  <div class="absolute top-0 left-1/2 w-[2px] h-[55vh] bg-gradient-to-b from-[rgba(201,168,76,0.35)] to-transparent origin-top" style="transform:rotate(-80deg) translateX(-50%)"></div>
  <div class="absolute top-0 left-1/2 w-[2px] h-[55vh] bg-gradient-to-b from-[rgba(201,168,76,0.35)] to-transparent origin-top" style="transform:rotate(-60deg) translateX(-50%)"></div>
  <div class="absolute top-0 left-1/2 w-[2px] h-[55vh] bg-gradient-to-b from-[rgba(201,168,76,0.35)] to-transparent origin-top" style="transform:rotate(-40deg) translateX(-50%)"></div>
  <div class="absolute top-0 left-1/2 w-[2px] h-[55vh] bg-gradient-to-b from-[rgba(201,168,76,0.35)] to-transparent origin-top" style="transform:rotate(-20deg) translateX(-50%)"></div>
  <div class="absolute top-0 left-1/2 w-[2px] h-[55vh] bg-gradient-to-b from-[rgba(201,168,76,0.35)] to-transparent origin-top" style="transform:rotate(0deg) translateX(-50%)"></div>
  <div class="absolute top-0 left-1/2 w-[2px] h-[55vh] bg-gradient-to-b from-[rgba(201,168,76,0.35)] to-transparent origin-top" style="transform:rotate(20deg) translateX(-50%)"></div>
  <div class="absolute top-0 left-1/2 w-[2px] h-[55vh] bg-gradient-to-b from-[rgba(201,168,76,0.35)] to-transparent origin-top" style="transform:rotate(40deg) translateX(-50%)"></div>
  <div class="absolute top-0 left-1/2 w-[2px] h-[55vh] bg-gradient-to-b from-[rgba(201,168,76,0.35)] to-transparent origin-top" style="transform:rotate(60deg) translateX(-50%)"></div>
  <div class="absolute top-0 left-1/2 w-[2px] h-[55vh] bg-gradient-to-b from-[rgba(201,168,76,0.35)] to-transparent origin-top" style="transform:rotate(80deg) translateX(-50%)"></div>
</div>
<div class="relative z-10 min-h-screen flex flex-col items-center justify-center px-4 py-10 gap-6">

  <div class="w-full max-w-[430px]">
    <div class="relative rounded-xl overflow-hidden bg-[rgba(16,22,32,0.82)] backdrop-blur-sm
                shadow-[0_0_0_1px_rgba(201,168,76,0.18),0_0_60px_rgba(0,0,0,0.85)]">

      <div class="absolute top-0 left-0 right-0 h-32 pointer-events-none
                  bg-[radial-gradient(ellipse_80%_60%_at_50%_0%,rgba(201,168,76,0.08),transparent)]"></div>

      <span class="absolute top-3 left-3 w-4 h-4 border-t border-l border-[rgba(201,168,76,0.45)]"></span>
      <span class="absolute top-3 right-3 w-4 h-4 border-t border-r border-[rgba(201,168,76,0.45)]"></span>
      <span class="absolute bottom-3 left-3 w-4 h-4 border-b border-l border-[rgba(201,168,76,0.45)]"></span>
      <span class="absolute bottom-3 right-3 w-4 h-4 border-b border-r border-[rgba(201,168,76,0.45)]"></span>
      <div class="p-8 relative">
        <div class="text-center mb-8">
          <div class="animate-pulse inline-block mb-4">
            <img src="/public/img/icon.png" alt="icon" class="max-h-14 mx-auto opacity-90">
          </div>
          <h2 style="font-family:'Cinzel',serif;" class="text-[#c9a84c] text-2xl font-bold tracking-widest uppercase">VIP Tattoo</h2>
          <p style="font-family:'Cinzel',serif;" class="text-[#4d6070] text-[10px] tracking-[0.3em] uppercase mt-1 font-light">Авторизація</p>
          <div class="flex items-center justify-center gap-2 mt-3">
            <div class="w-10 h-px bg-gradient-to-r from-transparent to-[rgba(201,168,76,0.6)]"></div>
            <div class="w-[5px] h-[5px] rotate-45 shrink-0 bg-[#c9a84c]"></div>
            <div class="w-10 h-px bg-gradient-to-l from-transparent to-[rgba(201,168,76,0.6)]"></div>
          </div>
        </div>
        <?php if (!empty($error)): ?>
        <div class="text-red-400 text-xs text-center mb-5 border border-red-800/50 bg-red-900/20 py-2 px-4 rounded-lg tracking-wide">
          <?= htmlspecialchars($error) ?>
        </div>
        <?php endif; ?>
        <form method="POST" >
          <div class="mb-5" >
            <label style="font-family:'Cinzel',serif;" class="block mb-2 text-[0.62rem] font-semibold tracking-[0.18em] uppercase text-[#7a8fa0]">Логін</label>
            <div class="relative">
              <input type="text" name="login" placeholder="Введіть логін" required
                class="w-full px-4 pr-10 py-3 rounded-lg text-sm text-[#ccd8e4] placeholder-[#3d5166] outline-none
                       bg-[rgba(8,13,20,0.85)] border border-[rgba(46,61,80,0.8)]
                       transition-all duration-300
                       focus:border-[rgba(201,168,76,0.6)] focus:shadow-[0_0_0_3px_rgba(201,168,76,0.08)]">
              <svg class="absolute right-3 top-1/2 -translate-y-1/2 opacity-25 pointer-events-none"
                   width="15" height="15" fill="none" stroke="#c9a84c" stroke-width="1.5" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
          <div class="mb-8">
            <label style="font-family:'Cinzel',serif;" class="block mb-2 text-[0.62rem] font-semibold tracking-[0.18em] uppercase text-[#7a8fa0]">Пароль</label>
            <div class="relative">
              <input type="password" name="password" placeholder="Введіть пароль" required
                class="w-full px-4 pr-10 py-3 rounded-lg text-sm text-[#ccd8e4] placeholder-[#3d5166] outline-none
                       bg-[rgba(8,13,20,0.85)] border border-[rgba(46,61,80,0.8)]
                       transition-all duration-300
                       focus:border-[rgba(201,168,76,0.6)] focus:shadow-[0_0_0_3px_rgba(201,168,76,0.08)]">
              <svg class="absolute right-3 top-1/2 -translate-y-1/2 opacity-25 pointer-events-none"
                   width="15" height="15" fill="none" stroke="#c9a84c" stroke-width="1.5" viewBox="0 0 24 24">
                <rect x="3" y="11" width="18" height="11" rx="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7 11V7a5 5 0 0 1 10 0v4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>

  <button type="submit" name="action" value="login"
    class="w-full py-3 text-[0.72rem] font-bold tracking-[0.22em] uppercase text-[#0a0f15]
           bg-gradient-to-r from-[#c9a84c] via-[#e8c96a] to-[#c9a84c]
           rounded-lg cursor-pointer border-0
           transition-all duration-300
           hover:-translate-y-0.5 active:translate-y-0"
    style="font-family:'Cinzel',serif;">
    Увійти
  </button>

  <div class="flex justify-center mt-4">
    <button type="submit" name="action" value="register"
      class="py-2 px-8 text-[0.65rem] font-bold tracking-[0.22em] uppercase
             text-white bg-transparent rounded-lg cursor-pointer
             border border-white/60
             transition-all duration-200
             hover:border-white hover:bg-white/5 active:translate-y-0"
      style="font-family:'Cinzel',serif;">
      Зареєструватись
    </button>
  </div>
</form>
      </div>
    </div>
</div>
  <div class="w-full max-w-[430px] grid grid-cols-4 rounded-xl overflow-hidden shadow-[0_0_0_1px_rgba(46,61,80,0.6)]">
    <div class="bg-[rgba(17,25,34,0.88)] px-2 py-3 text-center border-r border-[rgba(46,61,80,0.5)] hover:bg-[rgba(201,168,76,0.05)] transition-colors cursor-default">
      <div id="s1" style="font-family:'Cinzel',serif;" class="text-lg font-bold text-[#c9a84c] tracking-wider">0</div>
      <div class="text-[0.5rem] tracking-[0.12em] uppercase text-[#4d6070] mt-1 leading-tight">Виконаних<br>робіт</div>
    </div>
    <div class="bg-[rgba(17,25,34,0.88)] px-2 py-3 text-center border-r border-[rgba(46,61,80,0.5)] hover:bg-[rgba(201,168,76,0.05)] transition-colors cursor-default">
      <div id="s2" style="font-family:'Cinzel',serif;" class="text-lg font-bold text-[#c9a84c] tracking-wider">0</div>
      <div class="text-[0.5rem] tracking-[0.12em] uppercase text-[#4d6070] mt-1 leading-tight">Задоволених<br>клієнтів</div>
    </div>
    <div class="bg-[rgba(17,25,34,0.88)] px-2 py-3 text-center border-r border-[rgba(46,61,80,0.5)] hover:bg-[rgba(201,168,76,0.05)] transition-colors cursor-default">
      <div id="s3" style="font-family:'Cinzel',serif;" class="text-lg font-bold text-[#c9a84c] tracking-wider">0</div>
      <div class="text-[0.5rem] tracking-[0.12em] uppercase text-[#4d6070] mt-1 leading-tight">Майстрів<br>студії</div>
    </div>
    <div class="bg-[rgba(17,25,34,0.88)] px-2 py-3 text-center hover:bg-[rgba(201,168,76,0.05)] transition-colors cursor-default">
      <div id="s4" style="font-family:'Cinzel',serif;" class="text-lg font-bold text-[#c9a84c] tracking-wider">0</div>
      <div class="text-[0.5rem] tracking-[0.12em] uppercase text-[#4d6070] mt-1 leading-tight">Років<br>досвіду</div>
    </div>
  </div>
  <div class="w-full max-w-[430px] overflow-hidden">
    <p style="font-family:'Cinzel',serif;" class="text-center text-[0.8rem] tracking-[0.2em] uppercase text-[rgba(201,168,76,0.28)] mb-2">Наші стилі</p>
    <div class="overflow-hidden">
      <div id="ticker" class="flex gap-2.5 w-max" style="animation:ticker 30s linear infinite;"></div>
    </div>
  </div>
</div>
<style>
  @keyframes ticker { 0%{transform:translateX(0)} 100%{transform:translateX(-50%)} }
</style>
<script>
[[1240,'+'],[980,'+'],[7,''],[12,'']].forEach(([t,s],i)=>{
  const el=document.getElementById('s'+(i+1));let st=null;
  const step=ts=>{if(!st)st=ts;const p=Math.min((ts-st)/1600,1);const e=1-Math.pow(1-p,3);el.textContent=Math.floor(e*t)+s;if(p<1)requestAnimationFrame(step);};
  setTimeout(()=>requestAnimationFrame(step),400);
});

['Blackwork','Oldschool','Neo-Traditional','Geometric','Watercolor','Minimalism','Realism','Japanese','Dotwork','Tribal','Chicano','Dark Art','Sketch'].flatMap(s=>[s,s]).forEach(s=>{
  const el=document.createElement('span');
  el.style.cssText='white-space:nowrap;padding:5px 14px;border:1px solid rgba(201,168,76,0.18);border-radius:20px;font-size:0.6rem;letter-spacing:0.1em;text-transform:uppercase;color:rgba(201,168,76,0.48);cursor:default;';
  el.textContent=s;document.getElementById('ticker').appendChild(el);
});

const c=document.getElementById('bgc'),ctx=c.getContext('2d');
let W,H,pts=[];
const resize=()=>{W=c.width=innerWidth;H=c.height=innerHeight;};
resize();addEventListener('resize',resize);
for(let i=0;i<60;i++)pts.push({x:Math.random()*innerWidth,y:Math.random()*innerHeight,r:Math.random()*1.1+0.3,dx:(Math.random()-.5)*.22,dy:-(Math.random()*.28+.07),a:Math.random()*.32+.04});
(function draw(){ctx.clearRect(0,0,W,H);pts.forEach(p=>{ctx.beginPath();ctx.arc(p.x,p.y,p.r,0,Math.PI*2);ctx.fillStyle=`rgba(201,168,76,${p.a})`;ctx.fill();p.x+=p.dx;p.y+=p.dy;if(p.y<-4){p.y=H+4;p.x=Math.random()*W;}if(p.x<-4)p.x=W+4;if(p.x>W+4)p.x=-4;});requestAnimationFrame(draw);})();

</script>