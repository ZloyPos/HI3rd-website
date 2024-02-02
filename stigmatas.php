<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="iNFO Project, Honkai Impact Database, HI Database, Honkai Impact 3rd Database, HI3rd Database, HI3rd, HI3rd Archive, Honkai Impact 3rd Archive, Honkai Impact 3rd iNFO Database, Honkai Impact 3rd Characters, Honkai Impact 3rd Items, Honkai Impact 3rd Tierlist, Honkai Impact 3rd Weapons, Honkai Impact 3rd Stigmatas, Honkai Impact Guides, Honkai Impact 3rd Guides">
  <title>Стигматы | iNFO</title>
  <link rel="stylesheet" href="CSS/stigmatas.css">
</head>

<body>
  <?php include("nav.php"); ?>
    <div class="title"><span>СТИГМАТЫ</span></div>
  <?php
  $stigmatas = array(
    "Аладдин" => "Aladdin",
    "Бьянка: Театр" => "Bianka_Theatre",
    "Сесилия: Молодость" => "Cecilia_Youth",
    "Элизия: Первозданная" => "Elysia_Pristine",
    "Фу Хуа: Обычные Дни" => "Fu_Hua_OD",
    "Трансформация Идола" => "Idol_Transformation",
    "Киана Каслана" => "Kiana_Kaslana",
    "Ли Сушан: Воспоминания о Шэньчжоу" => "Li_Sushang_SR",
    "Маленькие Радости" => "Little_Joys",
    "МЕЙ" => "MEI",
    "Перикл" => "Pericles",
    "Райден Мей" => "Raiden_Mei",
    "Разбитые Мечи" => "Shattered_Swords",
    "Сладкие Грёзы" => "Sweet_Dreams",
    "Ван Гог" => "Van_Gogh",
    "Ивы" => "Willows",
    "Зенон" => "Zeno"
  );

  $variants = array("T", "M", "B");
  ?>
  <div class="stigmata-cards">
    <?php foreach ($stigmatas as $stigmataName => $imageNamePrefix) : ?>
      <div class="stigmata-card">
        <div class="stigmata-images">
          <?php foreach ($variants as $variant) :
            $imageName = "Images/Stigmatas/{$imageNamePrefix}{$variant}.webp";
            $altText = "{$stigmataName} {$variant}";
          ?>
            <img src="<?php echo $imageName; ?>" alt="<?php echo $altText; ?>" class="card-image">
          <?php endforeach; ?>
        </div>
        <span class="stigmata-name"><?php echo $stigmataName; ?></span>
      </div>
    <?php endforeach; ?>
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