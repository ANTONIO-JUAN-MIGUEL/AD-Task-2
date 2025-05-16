<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Madman's Boxing</title>
    <!-- Update this path -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php include __DIR__ . '/../components/navigation.component.php'; ?>

    <div class="main-container">
        <h1><?php echo $pageTitle; ?></h1>

        <div class="section">
            <h2>Basic Punches</h2>
            <div class="card-container">
                <?php foreach ($basicPunches as $name => $data): ?>
                    <div class="card">
                        <!-- Update image path -->
                        <img src="../assets/img/<?php echo $data[1]; ?>" alt="<?php echo $name; ?>">
                        <div class="card-content">
                            <h3><?php echo $name; ?></h3>
                            <p><?php echo $data[0]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="section">
            <h2>Fighting Style</h2>
            <div class="featured-card">
                <!-- Update image path -->
                <img src="../assets/img/<?php echo $styleImage; ?>" alt="<?php echo $fightingStyle; ?>">
                <div class="featured-content">
                    <h3>Used Style: <?php echo $fightingStyle; ?></h3>
                    <p><?php echo $styleDescription; ?></p>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Stances</h2>
            <div class="card-container">
                <?php foreach ($stances as $name => $data): ?>
                    <div class="card">
                        <!-- Update image path -->
                        <img src="../assets/img/<?php echo $data[1]; ?>" alt="<?php echo $name; ?>">
                        <div class="card-content">
                            <h3><?php echo $name; ?></h3>
                            <p><?php echo $data[0]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="back-button">
            <a href="../index.php">Back to Home</a>
        </div>
    </div>
</body>

</html>