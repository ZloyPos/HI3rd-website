<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="iNFO Project, Honkai Impact Database, HI Database, Honkai Impact 3rd Database, HI3rd Database, HI3rd, HI3rd Archive, Honkai Impact 3rd Archive, Honkai Impact 3rd iNFO Database, Honkai Impact 3rd Characters, Honkai Impact 3rd Items, Honkai Impact 3rd Tierlist, Honkai Impact 3rd Weapons, Honkai Impact 3rd Stigmatas, Honkai Impact Guides, Honkai Impact 3rd Guides">
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
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2023/02/13/625700e827bb334b0b01807ef523cb41_7769560738302344880.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20210811/2021081119164390837.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061821154273054.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061821060743679.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061820564036778.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061819462482990.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061819361626253.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061817364967287.png"
                    )
                ),
                array(
                    "name" => "Райден Мей",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2023/02/14/07c717c930aecc641bade643d7d862e8_778916622470670575.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200927/2020092710585463814.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200806/2020080615421783866.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200616/2020061620021244941.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061819344938302.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061821223413287.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061821374433536.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200623/2020062314264532543.png"
                    )
                ),
                array(
                    "name" => "Броня Зайчик",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2023/01/09/dbb168138fe42a86abbad08093120186_4592962777990546362.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20220113/2022011317562054920.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20210422/2021042212541794736.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200622/2020062215475329017.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200619/2020061918485238569.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200619/2020061916543791037.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200619/2020061916452046427.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200619/2020061916351394211.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200619/2020061915594971535.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200619/2020061915441372109.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200617/2020061719102282076.png"
                    )
                ),
                array(
                    "name" => "Элизия",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2022/09/14/cc0cb3d0a9f5826ea4f3b065bdae48c7_7406996032602669838.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20210916/2021091612101254675.png",
                    )
                ),
                array(
                    "name" => "Сирин",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/op-public/2023/09/04/35850f8a94673353fa5c0aab2b3ee5ce_23776171657345697.png"
                    )
                ),
                array(
                    "name" => "Шигуре Кира",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/op-public/2023/06/25/5a5b84ebb628068255a4f21a4ea90e98_8508826072564586765.png"
                    )
                ),
                array(
                    "name" => "ПРОМЕТЕЙ",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/op-public/2023/05/12/6ee95485b64143760207193630b1ee48_1858438452629772978.png"
                    )
                ),
                array(
                    "name" => "Мистельн Шариак",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/op-public/2023/05/12/e6bddc7280abfc801df8b6a28c611d0e_3935681142096486059.png"
                    )
                ),
                array(
                    "name" => "Сюзанна",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/op-public/2023/03/30/20c3b448592d84ab5ef39468191a16e9_563387213458496117.png"
                    )
                ),
                array(
                    "name" => "Аи Гиперион Λ",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2022/12/07/86bfbbf5c7898fa06c25c90308c4de1d_5067426831528689837.png"
                    )
                ),
                array(
                    "name" => "Ли Сушан",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2022/10/26/6b3283836108265135b46cb244ecb0a9_1320977919751818563.png"
                    )
                ),
                array(
                    "name" => "Вилл-Ви",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2022/08/11/6ecfebefc6a22b0e796f2f190e5915f1_1007850639120664816.png"
                    )
                ),
                array(
                    "name" => "Грисео",
                    "imageUrls" => array(
                        "https://fastcdn.hoyoverse.com/content-v2/bh3/113790/22ee1221fc3a52ae6a55fe34a05fba7a_5880508634626418190.png",
                        "https://webstatic.hoyoverse.com/upload/contentweb/2022/06/29/e00a7cc0f0f1e104a8349a80a89761f8_7697415012192657967.png"
                    )
                ),
                array(
                    "name" => "Апония",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2022/05/18/e61c93c3bd19be99ca28d7edb96defe6_2294047769551385143.png"
                    )
                ),
                array(
                    "name" => "Эден",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2022/05/18/35fdf831bc3473f0c5175bfe7afef44d_5219471322825998118.png"
                    )
                ),
                array(
                    "name" => "Пардофелис",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2022/04/07/b904f8bab2abaed4242a497e1b2a9885_7448349827127326298.png"
                    )
                ),
                array(
                    "name" => "Кэрол Пеппер",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20211202/2021120216451897978.png"
                    )
                ),
                array(
                    "name" => "Наташа Циоара",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20211022/2021102216342273847.png"
                    )
                ),
                array(
                    "name" => "Мёбиус",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20211022/2021102215154524706.png"
                    )
                ),
                array(
                    "name" => "Фишль",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20210707/2021070719404558609.png"
                    )
                ),
                array(
                    "name" => "Мурата Химеко",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200616/2020061619395782695.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061816132847384.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061816544971026.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061817131383623.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061818022023548.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200618/2020061819191024658.png"
                    )
                ),
                array(
                    "name" => "Яэ Сакура",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200616/2020061619573675943.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200701/2020070119012967466.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200701/2020070118474838579.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200701/2020070117331454724.png"
                    )
                ),
                array(
                    "name" => "Тереза Апокалипс",
                    "imageUrls" => array(
                        "https://fastcdn.hoyoverse.com/content-v2/bh3/113368/3fc204a3a5720e7f862dffea8601a133_8806538269413620850.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20211012/2021101210571843833.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200616/2020061619255164250.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200715/2020071517224111302.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200715/2020071517391299077.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200721/2020072117055042407.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200721/2020072117313038916.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200721/2020072117425786448.png"
                    )
                ),
                array(
                    "name" => "Фу Хуа",
                    "imageUrls" => array(
                        "https://fastcdn.hoyoverse.com/content-v2/bh3/119378/b747be267ca488553667f541cc4d6d74_4402454000064520730.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20210303/2021030314311783164.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200616/2020061619073872235.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200702/2020070214595442487.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200702/2020070215232390305.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200702/2020070215390360638.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200702/2020070215521531223.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200702/2020070216114911896.png"
                    )
                ),
                array(
                    "name" => "Каллен Каслана",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200615/2020061520505637447.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200702/2020070210535256211.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200702/2020070210360767385.png"
                    )
                ),
                array(
                    "name" => "Рита Росвайс",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2022/02/23/cb25532782e9dd86e1e0d40ff4bd7a2e_5333117911020780397.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200915/2020091513440064490.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200714/2020071419383060395.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200615/2020061520293870552.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200720/2020072018343435710.png"
                    )
                ),
                array(
                    "name" => "Зеле Воллерей",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/op-public/2023/07/31/36b05bc261713607f7cc2968365a1f45_3522989833417958190.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20210527/2021052719022291248.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200616/2020061617492179467.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200702/2020070214392920960.png"
                    )
                ),
                array(
                    "name" => "Розалия Оленьева",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20201029/2020102914412142637.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200615/2020061519504165491.png",
                    )
                ),
                array(
                    "name" => "Лилия Оленьева",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200610/2020061016274017494.png"
                    )
                ),
                array(
                    "name" => "Дюрандаль",
                    "imageUrls" => array(
                        "https://webstatic.hoyoverse.com/upload/contentweb/2022/02/24/ecf1c59afcb7ed4033cd0690134ae924_1366100562159084965.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20201216/2020121616445918580.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200611/2020061116521721707.png",
                        "https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200702/2020070214380348555.png"
                    )
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
                                        <img src="<?php echo $imageUrl; ?>" alt="Изображение баттлсьюта">
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