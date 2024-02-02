<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="iNFO Project, Honkai Impact Database, HI Database, Honkai Impact 3rd Database, HI3rd Database, HI3rd, HI3rd Archive, Honkai Impact 3rd Archive, Honkai Impact 3rd iNFO Database, Honkai Impact 3rd Characters, Honkai Impact 3rd Items, Honkai Impact 3rd Tierlist, Honkai Impact 3rd Weapons, Honkai Impact 3rd Stigmatas, Honkai Impact Guides, Honkai Impact 3rd Guides">
    <title>Оружия | iNFO</title>
    <link rel="stylesheet" href="CSS/weapons.css">
    <script src="Scripts/script.js" defer></script>
</head>

<body>
    <?php include("nav.php"); ?>
    <div class="title"><span>ОРУЖИЯ</span></div>
    <div class="weapons">
        <div class="weapon-filter">
            <?php
            echo '<button onclick="filterWeapons(\'all\')">';
            echo '<img src="Images/All.png" alt="Все" class="">';
            echo '</button>';

            $categories = array(
                "pistols" => "Пистолеты",
                "katanas" => "Катаны",
                "cannons" => "Пушки",
                "crosses" => "Кресты",
                "greatswords" => "Мечи",
                "gauntlets" => "Перчатки",
                "scythes" => "Косы",
                "lances" => "Копья",
                "bows" => "Луки",
                "chakrams" => "Чакрамы",
                "javelins" => "Метательные копья"
            );

            foreach ($categories as $key => $value) {
                echo '<button onclick="filterWeapons(\'' . $key . '\')">';
                echo '<img src="Images/' . ucfirst($key) . '/' . ucfirst($key) . '.png" alt="' . $value . '" class="">';
                echo '</button>';
            }
            ?>
        </div>

        <div class="weapon-cards">
            <?php
            $weapons = array(
                "crosses" => array("Anchor_of_the_Voyage" => "Якорь Путешествия", "Bloodied_Casket" => "Кровавый Гроб", "Elysian_Astra" => "Элизианская Астра", "Basilisk_Image" => "Изображение Василиска"),
                "gauntlets" => array("Incredibly_Infinite_Intimidator" => "Невероятный Бесконечный Запугиватель", "Nocturnal_Stealth" => "Скрытность в Ночи", "Pandora_Box_18th" => "18-ый Сундук Пандоры"),
                "chakrams" => array("Dream_Cutter" => "Резец Снов", "Twirling_Glaze" => "Кружащая Глазурь", "Purana_Phantasma" => "Фантазма Пураны", "Rudder_in_Dream" => "Руль во Сне"),
                "scythes" => array("Life_Harvester" => "Жнец Жизни", "Iris_of_Helheim" => "Ирис из Хельхейма"),
                "pistols" => array("Star_Dance" => "Танец Звёзд", "Domain_of_Genesis" => "Область Генезиса", "Echo_of_Paradise" => "Эхо Рая"),
                "bows" => array("Domain_of_Ego" => "Область Эго", "Whisper_of_the_Past" => "Шёпот Прошлого"),
                "katanas" => array("Domain_of_Unity" => "Область Единства", "Seven_Thunders_of_Retribution" => "Семь громов возмездия"),
                "cannons" => array("Domain_of_Ascension" => "Область Вознесения", "Falcon_Flare" => "Свечение Сокола", "Star_of_Eden" => "Звезда Эдема"),
                "javelins" => array("Prophetic_Dreams" => "Пророческие Сновидения"),
                "greatswords" => array("Shuhadaku_of_Uriel" => "Шухадаку Уриэля", "Sleeper_Dream" => "Сновидение Cпящего"),
                "lances" => array("Lance_of_Longinus" => "Копьё Лонгина", "Midnight_Ataegina" => "Полуночная Атаэгина")
            );

            // Создаем карточки для каждого оружия
            foreach ($weapons as $category => $weaponList) {
                foreach ($weaponList as $weapon => $name) {
                    echo '<div class="weapon-card" data-category="' . $category . '">';
                    echo '<img src="Images/' . ucfirst($category) . '/' . $weapon . '.webp" alt="' . $name . '" class="card-image">';
                    echo '<span class="weapon-name">' . $name . '</span>';
                    echo '</div>';
                }
            }
            ?>
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