<div id="countdown">
    <span class="title">距离前端开课：</span>
    <span class="day"></span>天
    <span class="hour">5</span>时
    <span class="minutes">4</span>分
    <span class="second">32</span>秒
    <script>

        function setCountDown(){
            var countdown_date = new Date();
            document.querySelector('#countdown .day').innerText = 3-countdown_date.getDate()%3;
            document.querySelector('#countdown .hour').innerText = 23 - countdown_date.getHours();
            document.querySelector('#countdown .minutes').innerText = 59 - countdown_date.getMinutes();
            document.querySelector('#countdown .second').innerText = 59 - countdown_date.getSeconds();
        }

        setCountDown()
        var countdown_timer = setInterval(setCountDown,1000);
        
    </script>
</div>