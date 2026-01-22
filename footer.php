<!-- 
    Name: Dantes, Christine May T.
    Section: WD-201
    Date: 1-23-26
-->
   </section>

    <footer>
        <span class="category-label" style="border: none; text-align: center; margin-top: 0;">Global Time Watch</span>
        <div class="watch-container" style="display: flex; justify-content: center; gap: 40px; margin-bottom: 30px;">
            <?php
            $watch = [
                "Singapore" => "Asia/Singapore",
                "Seoul" => "Asia/Seoul",
                "Paris" => "Europe/Paris"
            ];

            foreach ($watch as $cty => $zn) {
                $time = new DateTime("now", new DateTimeZone($zn));
                echo "<div class='watch-item'>";
                echo "<span class='watch-cty' style='color: #fca905; display: block; font-weight: bold;'>$cty</span>";
                echo $time->format('H:i');
                echo "</div>";
            }
            ?>
        </div>
        
        <p style="color: #6f7381; font-size: 0.8em; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px;">
            &copy; 2026 Dantes Christine May | PHILIPPINE FLIGHT SCHEDULE
        </p>
    </footer>
</body>
</html>

