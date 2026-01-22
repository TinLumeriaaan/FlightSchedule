<!-- 
    Name: Dantes, Christine May T.
    Section: WD-201
    Date: 1-23-26
-->
<?php include 'header.php'; ?>

<?php
$domestic_fl = [
    ["Manila to Cebu", "08:00 AM", "09:30 AM", "https://www.visitphilippines.org/wp-content/uploads/2016/04/Visit-Philippines-Cebu-City-780x405.jpg"],
    ["Manila to Davao", "10:15 AM", "12:00 PM", "https://miro.medium.com/v2/resize:fit:1000/1*hP-dxri-oTfJFsubEh71XQ.jpeg"],
    ["Manila to Palawan", "01:30 PM", "02:50 PM", "https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Kayangan_Lake%2C_Coron_-_Palawan.jpg/1280px-Kayangan_Lake%2C_Coron_-_Palawan.jpg"],
    ["Manila to Iloilo", "03:00 PM", "04:10 PM", "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Jaro_Iloilo_aerial_view_%28cropped%29.jpg/2560px-Jaro_Iloilo_aerial_view_%28cropped%29.jpg"],
    ["Manila to Bacolod", "05:45 PM", "07:00 PM", "https://mb.com.ph/uploads/imported_images/The_Upper_East_township_ae95156068.jpg"]
];


$intl_fl = [
    ["Manila to Tokyo", "Asia/Tokyo", "https://i0.wp.com/www.touristjapan.com/wp-content/uploads/2025/02/map-of-tokyo-japan-shinjuku-scaled.jpg?fit=2560%2C1707&ssl=1"],
    ["Manila to London", "Europe/London", "https://studying-in-uk.org/wp-content/uploads/2019/05/study-in-london.jpg"],
    ["Manila to Sydney", "Australia/Sydney", "https://cdn.sydneycitytour.com.au/wp-content/uploads/2024/10/Sydney-Opera-House.png"],
    ["Manila to Dubai", "Asia/Dubai", "https://www.dubai.it/en/wp-content/uploads/sites/142/dubai-marina-hd.jpg"],
    ["Manila to New York", "America/New_York", "https://i.natgeofe.com/k/5b396b5e-59e7-43a6-9448-708125549aa1/new-york-statue-of-liberty.jpg"]
];
?>

<span class="category-label">Philippine Domestic Flights </span>
<div class="flight-grid">
    <?php foreach ($domestic_fl as $flight): ?>
        <div class="flight-card">
            <img src="<?php echo $flight[3]; ?>" class="flight-img">
            <div class="flight-dest"><?php echo $flight[0]; ?></div>
            <p class="time-row">Departure: <?php echo $flight[1]; ?> | Arrival: <?php echo $flight[2]; ?></p>
            <p class="time-row">Current PH Time: <?php echo date('g:i a'); ?></p>
        </div>
    <?php endforeach; ?>
</div>

<span class="category-label">International Flights From Philippines</span>
<div class="flight-grid">
    <?php foreach ($intl_fl as $flight): ?>
        <div class="flight-card">
            <img src="<?php echo $flight[2]; ?>" class="flight-img">
            <div class="flight-dest"><?php echo $flight[0]; ?></div>

            <p class="time-row">
                Arrival: 
                <?php 
                    $t = new DateTime("now", new DateTimeZone($flight[1])); 
                    echo $t->format('g:i a'); 
                ?>
                
            </p>
            <p class="time-row">Manila Time: <?php echo date('g:i a'); ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'footer.php'; ?>

