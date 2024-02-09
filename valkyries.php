<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Honkai Impact 3rd валькирии, Honkai Impact 3rd баттлсьюты, HI3 валькирии, HI3 баттлсьюты">
">
    <title>Валькирии | iNFO</title>
    <link rel="stylesheet" href="CSS/valkyries.css">
</head>

<body>
    <?php include("nav.php"); ?>
    <div class="title"><span>ВАЛЬКИРИИ</span></div>
    <div class="valkyries-wrap">
        <div class="valkyries-list">
            <?php
            $valkyriesData = array(
                array(
                    "name" => "Киана Каслана",
                    "imageUrls" => array("WC", "VR", "VD", "DPr", "KM", "HoV", "HoF", "HoFin")
                ),
                array(
                    "name" => "Райден Мей",
                    "imageUrls" => array("CI", "VB", "SFUm", "SD", "DS", "LE", "HoT", "HoO")
                ),
                array(
                    "name" => "Броня Зайчик",
                    "imageUrls" => array("VC", "SS", "YA", "DK", "DB", "BN", "HoR", "HB", "SN-EX", "HoTr")
                ),
                array(
                    "name" => "Элизия",
                    "imageUrls" => array("MPE", "HoHE")
                ),
                array(
                    "name" => "Сирин",
                    "imageUrls" => array("MMG")
                ),
                array(
                    "name" => "Шигуре Кира",
                    "imageUrls" => array("SSb")
                ),
                array(
                    "name" => "ПРОМЕТЕЙ",
                    "imageUrls" => array("TA")
                ),
                array(
                    "name" => "Мистельн Шариак",
                    "imageUrls" => array("D")
                ),
                array(
                    "name" => "Сюзанна",
                    "imageUrls" => array("VQ")
                ),
                array(
                    "name" => "Аи Гиперион Λ",
                    "imageUrls" => array("CN")
                ),
                array(
                    "name" => "Ли Сушан",
                    "imageUrls" => array("JK")
                ),
                array(
                    "name" => "Вилл-Ви",
                    "imageUrls" => array("HC")
                ),
                array(
                    "name" => "Грисео",
                    "imageUrls" => array("SI", "CE")
                ),
                array(
                    "name" => "Апония",
                    "imageUrls" => array("DP")
                ),
                array(
                    "name" => "Эден",
                    "imageUrls" => array("GD")
                ),
                array(
                    "name" => "Пардофелис",
                    "imageUrls" => array("RC")
                ),
                array(
                    "name" => "Наташа Циоара",
                    "imageUrls" => array("MA")
                ),
                array(
                    "name" => "Мёбиус",
                    "imageUrls" => array("IO")
                ),
                array(
                    "name" => "Фишль",
                    "imageUrls" => array("PdV")
                ),
                array(
                    "name" => "Мурата Химеко",
                    "imageUrls" => array("BS", "VT", "SFus", "BR", "K", "VKE")
                ),
                array(
                    "name" => "Яэ Сакура",
                    "imageUrls" => array("GM", "GM", "FS", "DJ")
                ),
                array(
                    "name" => "Тереза Апокалипс",
                    "imageUrls" => array("VP", "VE", "TP", "SR", "CH", "LK", "SA", "LV")
                ),
                array(
                    "name" => "Фу Хуа",
                    "imageUrls" => array("VA", "HotF", "P", "NS", "SK", "AE", "HoS", "FoV")
                ),
                array(
                    "name" => "Каллен Каслана",
                    "imageUrls" => array("RI", "SiSe", "S")
                ),
                array(
                    "name" => "Рита Росвайс",
                    "imageUrls" => array("UR", "PI", "AKA", "FR", "SpAs")
                ),
                array(
                    "name" => "Зеле Воллерей",
                    "imageUrls" => array("SP", "SN", "SNyx", "HoRB")
                ),
                array(
                    "name" => "Розалия Оленьева",
                    "imageUrls" => array("MC", "FT")
                ),
                array(
                    "name" => "Лилия Оленьева",
                    "imageUrls" => array(
                        "BB"
                    )
                ),
                array(
                    "name" => "Дюрандаль",
                    "imageUrls" => array("VG", "BKE", "DA", "PE")
                )
            );

            ?>
            <?php foreach ($valkyriesData as $valkyrie) : ?>
                <div class="valkyries-item">
                    <div>
                        <div class="valkyries-item__title">
                            <div><?php echo $valkyrie["name"]; ?></div>
                            <div class="role-line"></div>
                            <div><?php echo $valkyrie["name"]; ?></div>
                        </div>
                        <div class="roles">
                            <?php foreach ($valkyrie["imageUrls"] as $imageUrl) : ?>
                                <div class="base-role-btn">
                                    <div class="imgbox">
                                        <img src="Images/Valkyries/<?php echo $imageUrl; ?>.webp" alt="Изображение баттлсьюта">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
    <div class="footer">
        <div class="footer_socials">
            <p>Наши соц.сети</p>
            <a href="https://t.me/honkai_impact_info" target="_blank" rel="noopener noreferrer">
                <div class="footer_text">
                    <div class="footer_socials_telegram">
                        <img src="Images/Telegram.png" class="icon" alt="Telegram">
                    </div>
                    <p class="footer_link">Telegram</p>
                </div>
            </a>
        </div>
        <div class="footer_disclaimer">
            <p>infoproject.ru не связан с miHoYo и не поддерживается ими. Игровые ресурсы принадлежат COGNOSPHERE PTE. LTD</p>
        </div>
    </div>
</body>

</html>
