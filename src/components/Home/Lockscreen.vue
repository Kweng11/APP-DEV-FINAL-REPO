<template>
    HTML CSS JSResult Skip Results Iframe
<div onclick="lockscreen_active()" id='Lockscreen' class="Lockscreen">
    <div class="lockscreen-bg"></div>
    <div id="lockscreen-time" class="lockscreen-time">
      <div id="currentTime" class="lockscreen-time-clock">
        10:10:10 AM
      </div>
      <div class="lockscreen-time-day">
        <span id="currentDay">Monday</span> 
        <span id="currentMonth">January</span>
        <span id="currentDate">10</span>
      </div>
      <div class="lockscreen-msg">
        Click to unlock
      </div>
    </div>
    <div id='Lockscreen-Login' class="lockscreen-login">
      <div id='lockscreen-login-form' class="lockscreen-login-form">
        <div class="lockscreen-image">
          <i style="font-size:2.7rem" class="fa fa-user-circle"></i>
        </div>
        <div class="lockscreen-name">John Doe</div>
        <form onsubmit="lockscreen_form_submit(event)" id="lockscreen-form" action="" method="">
          <input id="lockscreen-password" placeholder="(hint:password)" type="password" />
        </form>
      </div>
    </div>
</div>
<div id="lockscreen-toolip" class="lockscreen-toolip">
  <div title="Click to lock-screen" onclick="lockscreen_deactive()">
    <i class="fa fa-desktop" aria-hidden="true"></i>
   </div>
   <div title="Log-out">
     <i class="fa-solid fa-arrow-right-from-bracket"></i>
   </div>
</div>
<div class="show-lockscreen"><i title="Click to lock-screen" onclick="lockscreen_button_click()" class="fa fa-desktop" aria-hidden="true"></i></div>
</template>