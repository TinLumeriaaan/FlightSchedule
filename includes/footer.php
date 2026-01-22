<!-- 
    Name: Dantes, Christine May T.
    Section: WD-201
    Date: 1-23-26
-->
   </section>
    <footer>
        <span class="category-label" style="border: none; text-align: center; margin-top: 0; padding: 0; border-left: none;">Global Time Watch</span>
        <div class="watch-container">
            <?php
            $watch = ["Singapore" => "Asia/Singapore", "Seoul" => "Asia/Seoul", "Paris" => "Europe/Paris"];
            foreach ($watch as $cty => $zn) {
                $time = new DateTime("now", new DateTimeZone($zn));
                echo "<div><span style='color:#fca905; font-weight:bold; display:block;'>$cty</span>".$time->format('H:i')."</div>";
            }
            ?>
        </div>
        <p style="color: #6f7381; font-size: 0.7em; margin-top: 40px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px;">
            &copy; 2026 Dantes Christine May | PHILIPPINE FLIGHT SCHEDULE
        </p>
    </footer>
</body>
</html>