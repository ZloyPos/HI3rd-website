<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="Honkai Impact 3rd стигматы, HI3 стигматы, стигматы">
  <title>Стигматы | iNFO</title>
  <link rel="stylesheet" href="CSS/stigmatas.css">
    <script src="Scripts/script.js" defer></script>
</head>

<body>
  <?php include("nav.php"); ?>
    <div class="title"><span>СТИГМАТЫ</span></div>
  <?php
  $stigmatas = array(
    "Аладдин" => array(
      "name" => "Aladdin",
      "p1t" => "Желание Удовлетворённости от Жизни",
      "p1c" => "The team deals 20.0% more Bleed DMG. Valkyrie Quicksand equip bonus: Her weapon active and Ultimate deal 80.0% more Total DMG.",
      "p2t" => "Рассказ о Предательстве Судьбы",
      "p2c" => "Increases Physical DMG by 18.0%, and Combo ATK's Total DMG by 30.0%. When the host is on the field, dealing Bleed DMG restores 1 SP; CD: 1s."),
    "Бьянка: Театр" => array(
      "name" => "Bianka_Theatre",
      "p1t" => "Весь Мир - Театр",
      "p1c" => "Total DMG increases by 30.0%. Palatinus Equinox equip bonus:
      Triggering an enhancement from any stigma piece also triggers all other enhancements from other pieces in the set.",
      "p2t" => "А Люди в Нём - Актёры",
      "p2c" => "Physical DMG increases by 30.0%. Triggering World's a Stage boosts Physical DMG dealt by host's next Ultimate by 80.0% and makes it restore 200.0 HP."),
    "Сесилия: Молодость" => array(
      "name" => "Cecilia_Youth",
    "p1t" => "Мимолётное Сияние",
    "p1c" => "Increases Total DMG by 20.0%. Within 12s of entering battle, the total Elemental DMG received by all enemies on the field increases by 15.0% (exclusive).
    Triggering it again resets the duration.",
    "p2t" => "Значимое Пожелание",
    "p2c" => "QTE and weapon active increase Ice DMG by 30.0%. Dealing DMG with Ultimate triggers Dance with Me state and increases Ice DMG by an additional 35.0%.
    For 12s after the character enters the battle, the Total DMG received by all enemies on the field increases by 6.0%. Triggering it again resets the duration (exclusive).
    Every 500 max HP over 6000 max HP further increases team Total DMG by 2.5%, up to 12.5%. Sugary Starburst equip bonus: T, M, B, and 3-piece set bonuses will be maxed out."),
    "Элизия: Первозданная" => array(
      "name" => "Elysia_Pristine",
      "p1t" => "Пусть Момент Длится Вечно",
      "p1c" => "Total DMG increases by 25.0% in Herrscher Form. After 8 consecutive hits (CD 0.1s), ranged Ice DMG increases by 15.0% for 10s. Triggering it again resets the duration.
    Total DMG received decreases by 20.0%.",
    "p2t" => "Пусть Слава Длится Вечно",
    "p2c" => "Weapon skill CD reduces by 25.0%. Ranged Ice DMG increases by 20.0%. Ranged Total DMG increases by 35.0%."),
    "Фу Хуа: Обычные Дни" => array(
      "name" => "Fu_Hua_OD",
      "p1t" => "Wish for Contentment with Life",
      "p1c" => "The team deals 20.0% more Bleed DMG. Valkyrie Quicksand equip bonus: Her weapon active and Ultimate deal 80.0% more Total DMG.",
    "p2t" => "Tale of Fate's Betrayal",
    "p2c" => "Increases Physical DMG by 18.0%, and Combo ATK's Total DMG by 30.0%. When the host is on the field, dealing Bleed DMG restores 1 SP; CD: 1s."),
    "Трансформация Идола" => array(
      "name" => "Idol_Transformation",
      "p1t" => "Временная Главная Героиня",
      "p1c" => "When weapon skill hits, grants 1 stack of Spotlight that increases Fire DMG by 8.0%. Can only be triggered once per second and can stack 3 times.
    At max stacks, all team members deal 30.0% more Fire DMG to ignited enemies for 20s. Triggering it again resets the duration. Cannot stack.",
    "p2t" => "Дух Идола",
    "p2c" => "Weapon skills deal 15.0% more Fire DMG. When any team member attacks an ignited enemy, it takes 35.0% more Fire DMG for 5s (cannot stack);
    Triggering it again refreshes its duration. Chrono Navi equip bonus: Igniting enemies will make them take 20.0% more ignite DMG for 10s."),
    "Киана Каслана" => array(
      "name" => "Kiana_Kaslana",
      "p1t" => "Путь Бродяги",
      "p1c" => "Landing Basic ATK or Joint Bursting grants 1 stack of Trace of Moon; CD: 6s. Casting weapon active grants 1 stack of Dust of Time; CD: 3s.
    When possessing both Trace of Moon and Dust of Time, Combo ATK consumes all Trace of Moon and Dust of Time on hit to deal 45.0% more Total DMG temporarily,
    and the character also deals 45.0% more Total DMG for 8s. Triggering it again refreshes its duration.",
    "p2t" => "Завтрашнее Отправление",
    "p2c" => "In Herrscher form, weapon active and Ultimate deal 55.0% more Fire DMG. After casting weapon active, all enemies take 18.0% more Total DMG from the character for 8s;
    retriggering refreshes duration. During Absolute Time Fracture, the character deals 40.0% more Total DMG."),
    "Ли Сушан: Воспоминания о Шэньчжоу" => array(
      "name" => "Li_Sushang_SR",
      "p1t" => "Мирское Вино",
      "p1c" => "In Reinforcement state, add 1 stack of Menacing Sword Ki to targets for 18s when the team deals Ice DMG, up to a maximum of 10 stacks.
    Every stack increases Ice DMG taken by targets by 1.0%. When equipped by Jade Knight, maximum stacks for Menacing Sword Ki increases by 12 stacks.
    Additionally, if B-piece is equipped, triggering QTE can activate Reinforcement state equivalent to spending 150 SP.",
    "p2t" => "Паломничество по Шэньчжоу",
    "p2c" => "Increases max stack of Menacing Sword Ki to 15 stacks. Enemies affected by Menacing Sword Ki take additional 30.0% ATK of Ice DMG every second.
    Increases team's shield-breaking efficiency by 50.0%."),
    "Маленькие Радости" => array(
      "name" => "Little_Joys",
      "p1t" => "Сияющее Сердце Девушки",
      "p1c" => "Take 12.0% less DMG from enemies. The character deals 20.0% more Ignite DMG.",
    "p2t" => "Вечная Волшебница",
    "p2c" => "All enemies receive 14.0% more Fire DMG from this character. If the target has more than 2 stacks of Ignite, they will receive 6.0% more Total DMG from this character."),
    "МЕЙ" => array(
      "name" => "MEI",
      "p1t" => "В Суматохе",
      "p1c" => "Using Ultimate increases team Total DMG by 15.0% for 22s (triggering it again resets the duration). Terminal Aide 0017 equip bonus:
    With the b-pc of this set equipped, landing Ultimate grants Navigator state, which increases team Physical DMG by another 10.0% (exclusive).",
    "p2t" => "Ностальгические Мысли",
    "p2c" => "Team members break shields 40.0% easier (exclusive). When Ultimate hits, all enemies take 15.0% more Physical DMG for 20s (triggering it again resets the duration; exclusive)."),
    "Перикл" => array(
      "name" => "Pericles",
      "p1t" => "Морская Империя",
      "p1c" => "Ultimate boosts the host's Physical DMG by 35.0% and Crit DMG by 30.0% for 1s. CD: 8s.",
    "p2t" => "Золотая Эпоха",
    "p2c" => "Increases Crit DMG by 15.0%. When 60/120 SP is consumed in one go, Physical DMG increases by 20.0%/45.0% for 15s. Triggering it again resets the duration.
    Character's Crit Rate increases by 20% when there is only 1 character in the team."),
    "Райден Мей" => array(
      "name" => "Raiden_Mei",
      "p1t" => "Путь, Проложенный Вопряки Всему",
      "p1c" => "In Herrscher form, Basic/Combo/Charged ATKs deal 35.0% more Lightning DMG.
    Triggering Time-frozen Domain generates Thunderfall, making all enemies take 8.0% more Elemental DMG for 7s. 3 stacks max.
    This effect is exclusive and triggering it again refreshes its duration.",
    "p2t" => "Меч, Поднятый Против Судьбы",
    "p2c" => "All enemies take 20.0% more Lightning DMG from the character's Basic/Combo/Charged ATK (independent and exclusive).
    After any team member casts Joint Bursting in Herrscher form, all enemies enter Listen Well state for 10s (triggering it again refreshes the duration),
    which makes them take 15.0% more Total DMG (exclusive).
    Additionally, after such enemies are hit by the character's Combo ATK 5 times, they take 21.0% more Total DMG for 10s (exclusive; triggering it again refreshes the duration).
    Exit clears the counter."),
    "Разбитые Мечи" => array(
      "name" => "Shattered_Swords",
      "p1t" => "Мантра Клинка",
      "p1c" => "In Herrscher form, team deals 30.0% bonus Crit DMG (cannot stack) and host's attacks mark enemies.
    The mark explodes at 15 stacks dealing 300.0% ATK of Physical DMG to enemies nearby and removing marks on all enemies. CD: 5s.",
    "p2t" => "Взыскание Клинка",
    "p2c" => "Team gains 10.0% Crit Rate for 12s upon entry.
    When the host is in Herrscher form and hits an enemy, team gains 3.5% Total DMG for 12s (CD: 0.4s; 10 stacks max;
    if equipped by more than 1 Valkyrie, only one piece will take effect). Triggering it again resets the duration."),
    "Сладкие Грёзы" => array(
      "name" => "Sweet_Dreams",
      "p1t" => "Перед Рассветом",
      "p1c" => "Increases Total DMG by 10.0%. When the character is affected by Nocturnal Chiroptera, all enemies on the field take 20.0% more Lightning DMG. (Exclusive)",
    "p2t" => "После Заката",
    "p2c" => "Increases the team's Total DMG by 15.0% (exclusive). When the host is affected by Nocturnal Chiroptera, she recovers 1 SP per second and deal 30.0% more Lightning DMG."),
    "Ван Гог" => array(
      "name" => "Van_Gogh",
      "p1t" => "Неизбежная Меланхолия",
      "p1c" => "After using Weapon Skill, the team will carry Contrasting Colors effect, which can stack up to 2 times. Each stack increases Bleed DMG by 12.0% for 20s.
      Triggering it again resets the duration. This effect is exclusive.",
    "p2t" => "Пылкая Любовь",
    "p2c" => "The character takes 30.0% less Total DMG and deals 25.0% more Bleed Trauma.
    Cosmic Expression equip bonus: Each stack of Contrasting Colors increases the Total DMG taken by all enemies by 10.0%."),
    "Ивы" => array(
      "name" => "Willows",
      "p1t" => "Отражение Цветов на Росе",
      "p1c" => "Gain 6 stacks of Looming Shadow when character enters the field or enters burst mode.
    Spend 1 stack of Looming Shadow each time Weapon Active, Charged ATK, or Combo ATK hits an enemy to recover 1.0 SP and deal 20.0% more Ice DMG for 3.0s when effect is triggered.
    CD: 1s. Triggering it again resets the duration.",
    "p2t" => "Пение под Небесами",
    "p2c" => "All enemies take 5.0% more Ice DMG from the host (cannot stack). Spending over 100 SP at once increases this effect to 15.0% for 15s. Triggering it again resets the duration."),
    "Зенон" => array(
      "name" => "Zeno",
      "p1t" => "Бесконечное Пространство-Время",
      "p1c" => "Increases Total DMG by 35.0%. Lightning DMG from Combo ATK inflicts Butterfly Mark that lasts 15s (triggering it again refreshes the duration).
    A marked enemy suffers an explosion dealing 100.0% ATK of Lightning DMG every time it takes 4 hits from the host (CD: 1.5s)",
    "p2t" => "Вечно Недостижимая Цель",
    "p2c" => "Butterfly Mark's explosion restores 2 SP additionally.
    Triggering Ultimate Evasion Skill increases Lighting DMG against enemies with Butterfly Mark by 60.0% for 15s (triggering it again refreshes the duration).")
  );

  $variants = array("T", "M", "B");
  ?>
  <div class="stigmata-cards">
    <?php foreach ($stigmatas as $stigmataName => $stigmataData) : ?>
      <div class="stigmata-card">
        <span class="stigmata-name"><?php echo $stigmataName; ?></span>
        <div class="stigmata-images">
          <?php foreach ($variants as $variant) :
            $imageName = "Images/Stigmatas/{$stigmataData['name']}{$variant}.webp";
            $altText = "{$stigmataName} {$variant}";
          ?>
            <img src="<?php echo $imageName; ?>" alt="<?php echo $altText; ?>" class="card-image">
          <?php endforeach; ?>
        </div>
        <button class="accordion"><?php echo $stigmataData["p1t"]; ?></button>
        <div class="panel">
          <p><?php echo $stigmataData["p1c"]; ?></p>
      </div>
        <button class="accordion"><?php echo $stigmataData["p2t"]; ?></button>
        <div class="panel">
          <p><?php echo $stigmataData["p2c"]; ?></p>
      </div>
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
