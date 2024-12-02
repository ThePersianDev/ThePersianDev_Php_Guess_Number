<html>

<head>
    <title> Guess Number | حدس عدد</title>
    <meta lang="fa" charset="utf-8" />
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php
    /* Time Grettings */
    $time = date("G");
    $iran_time = $time + 3;
    switch ($iran_time) {
        case 0; {
                $time_txt = " بامدادتون خوش   ";
                break;
            }
        case 1; {
                $time_txt = " بامدادتون خوش   ";
                break;
            }
        case 2; {
                $time_txt = " بامدادتون خوش   ";
                break;
            }
        case 3; {
                $time_txt = " بامدادتون خوش   ";
                break;
            }
        case 4; {
                $time_txt = " بامدادتون خوش   ";
                break;
            }
        case 5; {
                $time_txt = " صبح بخیر    ";
                break;
            }
        case 6; {
                $time_txt = " صبح بخیر    ";
                break;
            }
        case 7; {
                $time_txt = " صبح بخیر    ";
                break;
            }
        case 8; {
                $time_txt = " صبح بخیر    ";
                break;
            }
        case 9; {
                $time_txt = " صبح بخیر    ";
                break;
            }
        case 10; {
                $time_txt = " صبح بخیر    ";
                break;
            }
        case 11; {
                $time_txt = " حدودا ظهره ، ظهر بخیر    ";
                break;
            }
        case 12; {
                $time_txt = "  ظهر بخیر    ";
                break;
            }
        case 13; {
                $time_txt = "  ظهر بخیر    ";
                break;
            }
        case 14; {
                $time_txt = "  عصر بخیر    ";
                break;
            }
        case 15; {
                $time_txt = "  عصر بخیر    ";
                break;
            }
        case 16; {
                $time_txt = "  عصر بخیر    ";
                break;
            }
        case 17; {
                $time_txt = "  عصر بخیر    ";
                break;
            }
        case 18; {
                $time_txt = "  عصر بخیر    ";
                break;
            }
        case 19; {
                $time_txt = "  عصر بخیر    ";
                break;
            }
        case 20; {
                $time_txt = "  شب خوش   ";
                break;
            }
        case 21; {
                $time_txt = "  شب خوش   ";
                break;
            }
        case 22; {
                $time_txt = "  شب خوش   ";
                break;
            }
        case 23; {
                $time_txt = "  شب خوش   ";
                break;
            }
        default: {
                $time_txt = " خوش اومدی ";
            }
    }
    ?>
    <div class="continer-all">
        <!-- Form -->
        <div class="form-continer">
            <form method="get" action="<?php $numb = null; ?>" class="form-1">
                <h2 class="Guess-Text"> یه عدد بیــن 1 تا 10 حدس بزن </h2>
                <input class="Input-Number" name='Number' type="text">
                <input class="Btn-Submit" value="بزن بریم" type="submit">


                <?php
                session_start();
                if (!isset($_SESSION['right_guess'])) {
                    $_SESSION['right_guess'] = 0;
                }
                if (!isset($_SESSION['total_guess'])) {
                    $_SESSION['total_guess'] = 0;
                }
                // Check if the reset button was clicked
if (isset($_POST['reset'])) {
    // Unset the session variables
    unset($_SESSION['right_guess']);
    unset($_SESSION['total_guess']);
    // Optionally, you can also destroy the session
    session_destroy();
    // Reinitialize the session variables
    $_SESSION['right_guess'] = 0;
    $_SESSION['total_guess'] = -1;
    echo "<p class='guess-text'>بازی دوباره راه اندازی شد!</p>";
}
                $numb = $_REQUEST["Number"] ?? null;
                $random_numb = rand(1, 10);
                if ($numb >= 1 && $numb <= 10) {
                    echo "<p class='guess-text'> $numb رو حدس زدی </p>";
                    $_SESSION['total_guess']++;
                    if ($random_numb == $numb) {
                        echo "<p class='guess-text'><span class='emoji'>✔</span> ایــــــــــول درست بود ، عدد $random_numb بود  </p>";
                        $_SESSION['right_guess']++;
                    } else {
                        echo "<p class='guess-text'><span class='emoji'>✖</span> نه ، عدد $random_numb بود ، باختی !  </p>";
                    }
                } elseif($numb != null){
                    echo "لطفا یک عدد بین 1 تا 10 وارد کنید.</p>";
                }
                else{
                    echo"<p class='guess-text'>خوش آمدید</p>";
                }

                ?>
            </form>
        </div>
        <div class="text-continer">
            <div class="texts">
                <h3> <span class="emoji">❤</span> توسط سید علیرضا سعیدی </h3>
            </div>
            <div class="texts">
                <h3> <?php echo "  " . $_SESSION['total_guess'] . " حدس های درست : " . $_SESSION['right_guess'] . " از "; ?> <span class="emoji">✨</span></h3>
                <form method="post" action="">
                    <button type="submit" class="Btn-Submit" name="reset">شــروع مجدد</button>
                </form>
            </div>
            <div class="texts">
                <h3><span class="emoji">🕐</span><?php echo " $time_txt "; ?></h3>
            </div>
        </div>
    </div>
</body>

</html>