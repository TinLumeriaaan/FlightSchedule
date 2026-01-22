<!-- 
    Name: Dantes, Christine May T.
    Section: WD-201
    Date: 1-23-26
-->
<?php include 'includes/header.php'; ?>

<?php
$domestic_fl = [
    ["Manila to Cebu", "Asia/Manila", "2026-01-23 08:00:00", 90, "https://www.visitphilippines.org/wp-content/uploads/2016/04/Visit-Philippines-Cebu-City-780x405.jpg"],
    ["Manila to Davao", "Asia/Manila", "2026-01-23 10:15:00", 110, "https://miro.medium.com/v2/resize:fit:1000/1*hP-dxri-oTfJFsubEh71XQ.jpeg"],
    ["Manila to Palawan", "Asia/Manila", "2026-01-23 13:30:00", 85, "https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Kayangan_Lake%2C_Coron_-_Palawan.jpg/1280px-Kayangan_Lake%2C_Coron_-_Palawan.jpg"],
    ["Manila to Iloilo", "Asia/Manila", "2026-01-23 15:00:00", 75, "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Jaro_Iloilo_aerial_view_%28cropped%29.jpg/2560px-Jaro_Iloilo_aerial_view_%28cropped%29.jpg"],
    ["Manila to Bacolod", "Asia/Manila", "2026-01-23 17:45:00", 70, "https://mb.com.ph/uploads/imported_images/The_Upper_East_township_ae95156068.jpg"]
];

$intl_fl = [
    ["Manila to Tokyo", "Asia/Tokyo", "2026-01-22 14:00:00", 240, "https://i0.wp.com/www.touristjapan.com/wp-content/uploads/2025/02/map-of-tokyo-japan-shinjuku-scaled.jpg?fit=2560%2C1707&ssl=1"],
    ["Manila to London", "Europe/London", "2026-01-22 11:00:00", 840, "https://studying-in-uk.org/wp-content/uploads/2019/05/study-in-london.jpg"],
    ["Manila to Sydney", "Australia/Sydney", "2026-01-22 20:00:00", 490, "https://cdn.sydneycitytour.com.au/wp-content/uploads/2024/10/Sydney-Opera-House.png"],
    ["Manila to Dubai", "Asia/Dubai", "2026-01-22 23:30:00", 560, "https://www.dubai.it/en/wp-content/uploads/sites/142/dubai-marina-hd.jpg"],
    ["Manila to New York", "America/New_York", "2026-01-22 09:00:00", 980, "https://i.natgeofe.com/k/5b396b5e-59e7-43a6-9448-708125549aa1/new-york-statue-of-liberty.jpg"]
];
?>

<span class="category-label">Domestic Flights</span>
<div class="flight-grid">
    <?php foreach ($domestic_fl as $f): 
        $dep = new DateTime($f[2]);
        $arr = clone $dep;
        $arr->modify("+" . $f[3] . " minutes");
        $cleanTZ = str_replace(['_', 'Asia/', 'America/', 'Europe/', 'Australia/'], [' ', '', '', '', ''], $f[1]);
    ?>
        <div class="flight-card">
            <img src="<?php echo $f[4]; ?>" class="flight-img">
            <div class="flight-dest"><?php echo $f[0]; ?></div>
            <p class="time-row">Departure: <?php echo $dep->format('g:i A'); ?></p>
            <p class="time-row">Arrival: <?php echo $arr->format('g:i A'); ?></p>
            <p class="time-row" style="color: #fca905; font-size: 0.7em;"><?php echo $cleanTZ; ?></p>
        </div>
    <?php endforeach; ?>
</div>

<span class="category-label">International Flights</span>
<div class="flight-grid">
    <?php foreach ($intl_fl as $f): 
        $dep = new DateTime($f[2], new DateTimeZone("Asia/Manila"));
        $arr = clone $dep;
        $arr->setTimezone(new DateTimeZone($f[1]));
        $arr->modify("+" . $f[3] . " minutes");
        $cleanTZ = str_replace(['_', 'Asia/', 'America/', 'Europe/', 'Australia/'], [' ', '', '', '', ''], $f[1]);
    ?>
        <div class="flight-card">
            <img src="<?php echo $f[4]; ?>" class="flight-img">
            <div class="flight-dest"><?php echo $f[0]; ?></div>
            <p class="time-row">Departure: <?php echo $dep->format('g:i A'); ?></p>
            <p class="time-row">Arrival: <?php echo $arr->format('g:i A'); ?></p>
            <p class="time-row" style="color: #fca905; font-size: 0.7em;"><?php echo $cleanTZ; ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>