<?php

/*
#################################################################################################################
This is an OPTIONAL configuration file.
The role of this file is to make updating of "tinyfilemanager.php" easier.
So you can:
-Feel free to remove completely this file and configure "tinyfilemanager.php" as a single file application.
or
-Put inside this file all the static configuration you want and forgot to configure "tinyfilemanager.php".
#################################################################################################################
*/

// Auth with login/password
// set true/false to enable/disable it
// Is independent from IP white- and blacklisting
$use_auth = true;

// Login user name and password
// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$auth_users = array(
    'admin' => '$2y$10$4dt6fpbNUxUvixu11sHbzu07tqD/gyN2nrf2z6KYU3wIcdzlkkE62',
'201795040038' => '$2y$10$N..6i0GgYX6Rbnf3inF2gea/cTpIuUN7qfjGobJBLLcYxRezQLQcO',
'201903040042' => '$2y$10$dqvxeqyHC.DgVk8CmpATAO08HuJT4WnBIgxZ4AxeTbdaa1TjKln0u',
'201903040043' => '$2y$10$ZQ/rXKPaZyEDNNM0UmGJ5uSbbHoy8PWAyTc/CwvyybWSSnSSNZrzq',
'201903040044' => '$2y$10$hqQCaIMjw84srJkBocx7EuwBv34002rgDcXxzuM3AvSOcymqumcbS',
'201903040045' => '$2y$10$b7zsdWdHGGDTuUC4GceKxOVG4x4c8iw8Keep3sm4j1MhHXA9ca.LC',
'201903040046' => '$2y$10$XTAu00smQIxWdb24QGSR6.3McJlwKR4f.DPvUUqx7nm7cB80tqoeC',
'201903040047' => '$2y$10$2MRraDW6AWNMaOFgYhT1k.EiZoO7Vkj4O/sj.naTQOtnSAZ6T3yCu',
'201903040048' => '$2y$10$u.TyFHwNcKEw31I3//ohAeb1sae1IXOR2rkqtcaFf0FKagzUzvt0K',
'201903040049' => '$2y$10$uxaC4cNto3XavS2xuHbIp.PCay37i4pXJA5UM5gtiJPPcrmir3qdG',
'201903040050' => '$2y$10$Oz0soo2/q46Wx.t0aeb5k.jWFnpB1fSiZRq2QSev4.8Y.7bznjvpa',
'201903040051' => '$2y$10$.N5pBk1ZzKzcxxqP/ecrmua5y4NZr0rtD40AqZa/0pdhj8GGpoiRS',
'201903040052' => '$2y$10$.dsZyT9HrZPQdAxhiOjakuqSSsWiRErSFHNzdWMZvkPjbXrDeMt6G',
'201903040053' => '$2y$10$RCasXel/tp8zCvXApoivAukqGBn/6z44y0KrqUwZg88.LZeNGZNWO',
'201903040054' => '$2y$10$okD6KxvGlt6xTTyDU40gz.PLGUCom14eYa2vEpvCdE5LsNXiALGqu',
'201903040055' => '$2y$10$qMNOPciz9ukn.oK6ZFLx4.lJzLzfgCWWjIO7cGQp/T/x49MTovTl.',
'201903040056' => '$2y$10$D2IMPZD.ZX6LN6PPphX49eM8P5RkLzhgAd/Af8vztmyt8XVVFUNuO',
'201903040057' => '$2y$10$JkbTmCNp6FQXVXveLCfd3.tifNhDKvIXFY47JKk6b5I4nlaa0P8oe',
'201903040058' => '$2y$10$QHOQuaKA3JTsI873aEkWge.Du6RswVMHhu6/LlVNvq84Wv5VPfMTC',
'201903040059' => '$2y$10$AufpLTytmieTHJUzefmfmeB7Mb4VsBa0EoP8Zzo.gVUqNVzLcS0W.',
'201903040060' => '$2y$10$W0cYJjhGsfELIeUaFbxL8eyYGd0naRuJF9AlBj1YXuOzQg8HDviZm',
'201903040061' => '$2y$10$NBVpPL7IK3HoY/5BeCmZUefJNCb.hx6RuiN23kQyjU/VQT2TliHmK',
'201903040063' => '$2y$10$Mv6Zgs08DXF9ebW.DE64QOtELpVD8J/ZGhOMiKm/Dh9ISJue/9zdi',
'201903040064' => '$2y$10$VAv892eY3dB7jS6fOSZHZescUBm4t52dLZNCO1mPMS31k3WaAYBoW',
'201903040065' => '$2y$10$774yfnzXUUyY5Bl9rDY7jO35TnPn1C6H6rdDzl4.9bnY6TMzwD.gi',
'201903040066' => '$2y$10$JtUuBFSkjgKPQpIm1rRlde1OR3zrauen43uXRILSy/sfAFA1xe6XK',
'201903040067' => '$2y$10$Ftwx9CUBLLaFkbbyyr4w2.UXOQDmKk.A/jNjimsD9o82VkwJwLzB.',
'201903040068' => '$2y$10$.l4O3yQJtHcehBynlXEl3O.b8/RlMir8fsLeJq3BLfdxPzohsg8gG',
'201903040069' => '$2y$10$kk2PL2/24vSKbcuHAURwpOSTyiQhI4ffNFbDsTXjlArL/T6Vx2ChS',
'201903040070' => '$2y$10$RUFqyY8XYfZqorXkineQbOMlqEv3uy3wfO/GQuApnGQZZy0DgIgzq',
'201903040071' => '$2y$10$Vh6FXcACjNG3VzxCHyMleuYWvYMnisfB0rsbpcauuqsP6MW1XrDCa',
'201903040073' => '$2y$10$1WIZ3DH.mQh9Wi1d/nsssumxNNKNK.cdV3vBwNf7/Z5bB4Fd.NPue',
'201903040074' => '$2y$10$ZL6I73Hn8v/U6HrUV5mI.uFZL75xfZvQxGW1XsLYYv6I4UA969pAG',
'201903040075' => '$2y$10$UG8aZ88z9dEMcXykO.43n.TyJpTVftBfTmSBwB8v/B1lO4ZvKIAQa',
'201903040076' => '$2y$10$.jX/nwi0cFrfuA60F8JcTOYrT83Zqfkw3r3tBqiG65S.kpg7uoHxa',
'201903040077' => '$2y$10$sTqOIGosjhQnWMXkWiN9e.wDy.TQKZ.Dv5sCbnWoWmGEQwciGPjYO',
'201903040078' => '$2y$10$vi6bfZ.SLcU8opvVFipbl.LWDhBTLx8ytpcoupomM4VHrvkaHAU4u',
'201903040079' => '$2y$10$X.O9ILc3IiPan04z/TLHw.0DF/4n1kfK.2EV375MHHegXSVyMeecG',
'201903040080' => '$2y$10$44oj4tsN/kksFz7kf.2Ok.gKgG7n3.Tds8tG0pOEVnCEDBMU9GZSO',
'201903040081' => '$2y$10$6.WVP70nuiAsMt/x6ORrW.tLp8QCvZUeXCiT8na/t6AcEW3Z1uvse',
'201903040082' => '$2y$10$rI/Ma7TvffWDu3IwYjEa3.AR3fPBv6THPbZGjQmKBE/Tcg1Qxb1Lq',
'201703040049' => '$2y$10$hq8S3zllfUpOJSLIpRvD/uKoWG2jdGgTXC5Kg3qJQNur8aA34Tizm',
'201903040001' => '$2y$10$K.KNs9fZU6Fe29horcZLLu4N1U8Zf35KwyQvjzYDr1OD97Xxhd85q',
'201903040002' => '$2y$10$OZ6hQkBISHry.bFujKmb.ebJbfha1GN13wasbxDvenwf1lsXwLT8.',
'201903040003' => '$2y$10$dquR3l6OCpPIiDCN7RHwjuKD/IJCJG8aBTJWKcged5rLOJR9IZOZ.',
'201903040004' => '$2y$10$2QFozNlgrtZ2SR99vM3Heu7hTHLHM1UmKRjLPqw16dhAbovSksvK6',
'201903040005' => '$2y$10$NQOwKP2j313MCAzK1GYt1eX1icPclHpml4EhAf/O2BR90fuSAd0pC',
'201903040006' => '$2y$10$B.LP4dZSALLCXTdubqIxWeXMSU6xvUki8bXp8a1Vc7h7AJF3Es6VW',
'201903040007' => '$2y$10$8B66mhFJrQW6jY4czSasSORaZGB959XwM1LwPEzP0OxOetTrez5Yy',
'201903040008' => '$2y$10$/yB14PlK/8cumNHX4sqe7OlDZIiRUQjZbeNDZt/i4b73Nv0nIdknS',
'201903040009' => '$2y$10$PNuZYV9tb.bvBiIfVWNIju2FLwZB598CVjh6w8Khd75y/4Ql1hUkq',
'201903040010' => '$2y$10$LIYOU6HeuyIQQsDAnkN2duVA3cQ2SB8/M.5T01hEZeDfDHZrVVxFC',
'201903040011' => '$2y$10$aOlm99Ab/O6k.22N5RupDOApRqwOhgisVkGW51xj.iZF1vUv2OKPu',
'201903040012' => '$2y$10$ymqt12g94.sZ45M5ApJdUeB/HsknHgArO8H3u3LylG3I23kZ7t3au',
'201903040013' => '$2y$10$dS9MZtJSidqbxH21.sO4..ILWifu7wFGKzdgvM7pb.pw2gFf71FHS',
'201903040014' => '$2y$10$KkaQZFFo7gUfFibOkr.LNeIiOdZw7Jeck1ek29MLepzLa0toKtZRG',
'201903040015' => '$2y$10$EXOuXfqETnkykiJfCbulDeEeEcNPdQeMxQRKxdDJADErtwzTv5C.G',
'201903040016' => '$2y$10$syv3HQH0.Xwa5YD1ej1WZuZ6KRzx5lGvVf8e6wiub5p3kHzPBqdea',
'201903040017' => '$2y$10$c3Jc/37Va0/sLlFGukXn/eSGGKPiWYcCl.8u4AOkkPmyqBF6Sj4oC',
'201903040018' => '$2y$10$qAUM8YmrXlpf5IVM4J2rCeW28eUdlOepmRps2yiG9RO49OD5dow4O',
'201903040019' => '$2y$10$u31KtkiWa3h5uHTZifBBEONgx.0IMzSqX/jaw3QmBfsR/EibnxUqq',
'201903040020' => '$2y$10$tD6PSnSJFNAlRehs3aPZ..vkSjdNnAg4brWccIaECbJ/ON1H4n/Ze',
'201903040021' => '$2y$10$JULoylxD2iWVZ6IIAugwgesBzNdgoRgZ68FCELiMR0pYpNAr0Ix4O',
'201903040022' => '$2y$10$P4E00gdqNrtWDDLrpm6uy.pgcD6eugoSQRiXzc4s57WWTdxIi3igu',
'201903040023' => '$2y$10$.CTPJ6JSNh48LYEG6bi9vOQAWISPL9f7BZihp/7Bqzpc8XILuo.8.',
'201903040024' => '$2y$10$fMKRLw1VnYIUidJx9vHLNuhbJwSK.bYTM6SkPVvrWizbVRN/uLNV2',
'201903040025' => '$2y$10$MEnh02NtvXTU2bEsV9CrV.onszjb6Jed062PERK8YKneXkfMWJYjC',
'201903040026' => '$2y$10$vKT8beO55v/FRJDHvSFbOOLXw/d/HF4TlCNSquSokd9FcIc6EwWgu',
'201903040027' => '$2y$10$ZjUSLkgpGMFQY./rNmq6SOEkAcysXIYiyFWWQl.GJD2ux/6A5bkFG',
'201903040028' => '$2y$10$2zgn6N3kwheMNmTd06bQguvHyxb42g84eSFC3B1ziVttafznaQQFq',
'201903040029' => '$2y$10$MinfagBqTs51n43bF2Lv8O88JLfTmeY3JQa92eKHGzY0xWTHJFp7e',
'201903040030' => '$2y$10$X1F5NpW1Dw7.1sDac6QWT.xM4v9IAOZX6JrAgmPyXF3oidE7W6n8O',
'201903040032' => '$2y$10$FMVUrEm85ZZzphvNwJ8YeeqvR7TodHMdrq9EOJRYZZeKK.36YLyHy',
'201903040034' => '$2y$10$0ZZczVxMFbNWtYSN4UTYX.rcYRAbeaseHLU5jba4/q1ht5NROO51C',
'201903040035' => '$2y$10$TK//rztuAO5d6xxelRdZJerlb1TJRJTWjAQchNyrmaapVBPLQitk6',
'201903040036' => '$2y$10$uaMg922F7R6dSAeC599MDuzD7YXO2OXTAyP9dtYYsn729ncbuEqAy',
'201903040037' => '$2y$10$P/kO/Jtd6hz4hpKULJGWk.NOoAZpYQH5X8pMrGhPWahFXx.XRHV2e',
'201903040038' => '$2y$10$lpzvAhc.Bk2E4phCjOweIOuEVHh/RbNdH5blGQpOHcxyx1G5sVVn.',
'201903040039' => '$2y$10$2gJFU6aSKUUEA9Cb2miGyek4Fp7OxW24N3MuudXQvmRf23kqsRomu',
'201903040040' => '$2y$10$7MVffuNS7TOPw8AL2prKUump1.FPEu3n70tv/jospDXQyhkp/TWE6',
'201903040041' => '$2y$10$04bVNNlgBhIAMvkQlP1RHuSYvoF1d6osHOLO.6q5SuDd5v04e2OOu',
'201907040064' => '$2y$10$sWTzLUwHAO4fz8gfgIUELe5HwgGk6qXGL9bMTvCPELlMTaEK4clOC',

'201902030003' => '$2y$10$GhN4Sq1LsgJxz/fJsD5cfu3Qc.P1RUe6ngIqZpYu9iOwtvt/7UDv2',
'201902030004' => '$2y$10$xGFHkiRph5x1gTeMaq.YqesM2BMBM6BaEFQVomDbd77c9bQ6eVnKS',
'201902030008' => '$2y$10$zIMMUe4EeZWWMUSE8m4s5Od45dbCcq/DWa7VKeZLzeUSKzAKFwb/O',
'201902030009' => '$2y$10$.MpxHOq8GQVakyplN5m5oOtvK3e2nJ/B/QktW9a9oiNRMbSrUNLB6',
'201902030010' => '$2y$10$BOiRMvm/MdisqibdCB62aedh0DykegOLaaBMbOYM9nCitCverqe2q',
'201902030011' => '$2y$10$pEjq6mgvqbSA1UX5/q642e5Wt.WKP3c62xGA/gmTdVqPLZ7OummKC',
'201902030012' => '$2y$10$gBSQ2N58khraGBzVDzO4MejSzoEn1/t8MN3UIFqhM/..f8K4dMIXG',
'201902030013' => '$2y$10$1YAkp./stMtTfEn8ok2L0ucnSgYVh1//Z5ofRs.jX35nDDdHivaQS',
'201902030015' => '$2y$10$5tWlfcaK..ho6hIYHboqluLUBHdKTd/CX2kpKAesunbqpXReZsEfy',
'201902030017' => '$2y$10$ceXDxFgnG5/qvBLbyOqUreQjPQb5Xtspq1Al7DcVLkBNV37uxFQTi',
'201902030022' => '$2y$10$7kuKJ4mo02ce4oe2a8wPKOZVI45bbc3ebf5eSUwvjn6kFiit9Qvme',
'201902030024' => '$2y$10$4LQl9aF4SLBTAttFu26EMe9ebi4WKekeNu13VV6e1ET8f4D2OT82a',
'201902030025' => '$2y$10$PdweT6/XEpkMtxpT1TS6TuY8ajd9gyXP8SBmH6t0WzBtViWKATlNe',
'201902030027' => '$2y$10$nNfFlWSzFuo7Gm9ZhYwVtOR2u3Fc4nWGZDoCjTpizp4k6bKBbwKYq',
'201902030028' => '$2y$10$b30duzM3Ck/qTGomin7vZ.t8LOHHIeNhtgh9O61j7/E66AHI3eVFO',
'201902030042' => '$2y$10$gmQoX6uuqPJ5lP2JNytdhuGCcD4scQXNmzkfjAad20pN1HXnAcO4S',
'201902030043' => '$2y$10$RT7iK13ki3XYhD24hdd8nOeA8hd6D/8RVVv.V/r7sDEn26JLOvYgy',
'201902030044' => '$2y$10$0Dh76n0a9Mfrvdz7boOJ6eiNuJaJP3QAX3.2BavxNyr8D9KxhbRG6',
'201902030045' => '$2y$10$p0DoxU.Z3EBTiTe4xPkDsOxxYjyO6oksWvwrREmusRXJ.GhrOw8JW',
'201902030046' => '$2y$10$fKYdLjXt.ddz9rOQGbKs0.6Th/U1V1E.fxY0.la4hIjjU1ovjxWJO',
'201902030047' => '$2y$10$2TT0AG5vZGEJLGmg6rYwzOkNTZ6gzI1NHWC/D5w8l8Jbwr7QWOtFi',
'201902030048' => '$2y$10$mjkadBjpcNpoNcGF7hoiVeG120J.N2dY0gXHxwoD.UrCHwteWVy9S',
'201902030050' => '$2y$10$oVbIH376EdZhqbVtuz/F.OpJY/m4Rw2GwtJlIts0.LuQ8tcn84E12',
'201902030051' => '$2y$10$PQvZWioSiOJV/6ZYZW4z3.4.FnGkdEC2tb5OhxQR6eCzT42yG83j6',
'201902030053' => '$2y$10$l9Ukvo5ZWb4yNaANYSA0yeiVc9LYYG5X38u5rnVloWbJHmAmkydKO',
'201902030054' => '$2y$10$s4fkwncrwQmKoXVpAogSAOlvb7Rcfs/UtQqEao7AXCKP/m94RPogC',
'201902030055' => '$2y$10$oQ0zEfAKP2gl41ERrledWOLu8Xl1mETmtDILBpRm.D8QV2PORHzpm',
'201902030056' => '$2y$10$ILv.VuLusZ3jna5gGegBV.jAGzlFhmauLFBYAFnnlDT3ZP67fBwAW',
'201902030057' => '$2y$10$K.Atsgk7tYstLOC8lXgXm.LxrL6VWywShVkvZ3UHjnpyEPEYvNiz2',
'201902030058' => '$2y$10$KdGbOaL4py02hwYv8UMTjOs3FX7XTdeN4QTYnN0x8PhRUQvJnjwOW',
'201902030059' => '$2y$10$ywOuAS.lOpjNfY26wkMHQO5mTX0syyXhsFPkYFzt7YenZPO6Nag7K',
'201902030060' => '$2y$10$fSYdCnlYY/AksLZmFwvVRuNA.5qwnhwARIyEKIR9xscAd2K2oYV2.',
'201902030061' => '$2y$10$f2VKilC1ci8aF.XYfZfWZOgJhsRRXh0.A/NCN/nCoAvSB1QYqzRUe',
'201902030062' => '$2y$10$exwc8ZfTqvlk4pBDrvW3wOFFwo/6I.XnHlyXhaNYzmFjnNUeaTEey',
'201902030063' => '$2y$10$JpbsmykztDjMiOD..7TFX.MYuSPom3lWaiEyWMta8SqtnetQe9eTW',
'201902030065' => '$2y$10$JDuOfRef6./G14Y2ElXp5ej5IIgDmf6Va9.m6YUuoRmJ6zFMpnWei',
'201902030066' => '$2y$10$IUc4cXZeProB16d/BqPF9ubpx/db/n28S08JeBvPkPas18JrDHj3K',
'201902030067' => '$2y$10$QKlE0OLjmlFf1Ah9/NGweutUaNw64Sw9Td1KTOWCA/J6jMj4ufoR.',
'201902030068' => '$2y$10$AsYDg8eh8rBDtu/vFtPjvOiYf.9nEIU3hwm40uf8DOwC9lE0vKggG',
'201902030069' => '$2y$10$se4pkMQQJbgBba8avHDIDe4.nI3lXrEFgjISMYysoufZzK0S69AB2',
'201902030070' => '$2y$10$b/HzoVzZ8C1Lq3d34rmFLeHHvGHCPXTcwmfVawpzM7PDUsPCIMbeS',
'201902030071' => '$2y$10$MvOPP0zGGrdgTtrIBBJ93ey8PYlEgl2PgDxJZQe.HCa07eITGGOza',
'201902030072' => '$2y$10$jfT7OmXzzBizUU7IyQr3fujFHsuVuKFaPW6RZNU5vNveajOKoMPFO',
'201902030073' => '$2y$10$SA7hn8igEZ5quactQiYQ0.vGEkcf48XOt90xFdIJK4ViaU3x0fGtO',
'201902030074' => '$2y$10$eYGFjq9LszF6cf8S4gRKOemhqBDo1BvMNEL2OSazDyxr8ZYveSOh2',
'201902030075' => '$2y$10$URv0mObo6k3vzMLA0VvKCubruwj4VlUg.cdFEtQ3Kjgvto8ANFX2G',
'201902030076' => '$2y$10$tsssv235P2IvJroGnzoEZuoeSJol0ArgbP8keeIzdQe2FePoPp35a',
'201902030077' => '$2y$10$zjqzxazsdp.eHgNVXM.2jezmkLabURM.RdXbUJtHjSMpmEihzERaa',
'201902030078' => '$2y$10$1bqpWeDjCSM92jej93c3e.O/b8aVPSYizMQHR1hE8UhfCb3D5TIKS',
'201902030079' => '$2y$10$1wU.5TOW.xJxx1m7Xc8j2OKUD3BRw/7HoHxjr.BG2yAqxO7Pxvkmm',
'201902030080' => '$2y$10$Fs5rkuytsIVD/ZDaL9I0XerT7dcBD.2MRRlIn4j3kRqy18CQFVV4.',
'201902030081' => '$2y$10$Ih/ySfV.Y/zFQKR3t1DrGu2lBfcO2.DYpPXYeXrn/Hd1q7utR.p6i',
'201902030082' => '$2y$10$GGiY577EOoPFDAGp5DwICe2RhjxHSWxKPOdUwmder1px2wrzlAfrK',
);

// Readonly users
// e.g. array('users', 'guest', ...)
$readonly_users = array(
    
);

//set application theme
//options - 'light' and 'dark'
$theme = 'light';

// Enable highlight.js (https://highlightjs.org/) on view's page
$use_highlightjs = true;

// highlight.js style
// for dark theme use 'ir-black'
$highlightjs_style = 'vs';

// Enable ace.js (https://ace.c9.io/) on view's page
$edit_files = true;

// Default timezone for date() and time()
// Doc - http://php.net/manual/en/timezones.php
//$default_timezone = 'Etc/UTC'; // UTC
$default_timezone = 'Asia/Shanghai';

// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
$root_path = $_SERVER['DOCUMENT_ROOT'];

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$root_url = '';

// Server hostname. Can set manually if wrong
$http_host = $_SERVER['HTTP_HOST'];

// user specific directories
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
//$directories_users = array();
$directories_users = array(
    'admin' => '/var/www/db-s21',
'201795040038' => '/var/www/db-s21/201795040038',
'201903040042' => '/var/www/db-s21/201903040042',
'201903040043' => '/var/www/db-s21/201903040043',
'201903040044' => '/var/www/db-s21/201903040044',
'201903040045' => '/var/www/db-s21/201903040045',
'201903040046' => '/var/www/db-s21/201903040046',
'201903040047' => '/var/www/db-s21/201903040047',
'201903040048' => '/var/www/db-s21/201903040048',
'201903040049' => '/var/www/db-s21/201903040049',
'201903040050' => '/var/www/db-s21/201903040050',
'201903040051' => '/var/www/db-s21/201903040051',
'201903040052' => '/var/www/db-s21/201903040052',
'201903040053' => '/var/www/db-s21/201903040053',
'201903040054' => '/var/www/db-s21/201903040054',
'201903040055' => '/var/www/db-s21/201903040055',
'201903040056' => '/var/www/db-s21/201903040056',
'201903040057' => '/var/www/db-s21/201903040057',
'201903040058' => '/var/www/db-s21/201903040058',
'201903040059' => '/var/www/db-s21/201903040059',
'201903040060' => '/var/www/db-s21/201903040060',
'201903040061' => '/var/www/db-s21/201903040061',
'201903040063' => '/var/www/db-s21/201903040063',
'201903040064' => '/var/www/db-s21/201903040064',
'201903040065' => '/var/www/db-s21/201903040065',
'201903040066' => '/var/www/db-s21/201903040066',
'201903040067' => '/var/www/db-s21/201903040067',
'201903040068' => '/var/www/db-s21/201903040068',
'201903040069' => '/var/www/db-s21/201903040069',
'201903040070' => '/var/www/db-s21/201903040070',
'201903040071' => '/var/www/db-s21/201903040071',
'201903040073' => '/var/www/db-s21/201903040073',
'201903040074' => '/var/www/db-s21/201903040074',
'201903040075' => '/var/www/db-s21/201903040075',
'201903040076' => '/var/www/db-s21/201903040076',
'201903040077' => '/var/www/db-s21/201903040077',
'201903040078' => '/var/www/db-s21/201903040078',
'201903040079' => '/var/www/db-s21/201903040079',
'201903040080' => '/var/www/db-s21/201903040080',
'201903040081' => '/var/www/db-s21/201903040081',
'201903040082' => '/var/www/db-s21/201903040082',
'201703040049' => '/var/www/db-s21/201703040049',
'201903040001' => '/var/www/db-s21/201903040001',
'201903040002' => '/var/www/db-s21/201903040002',
'201903040003' => '/var/www/db-s21/201903040003',
'201903040004' => '/var/www/db-s21/201903040004',
'201903040005' => '/var/www/db-s21/201903040005',
'201903040006' => '/var/www/db-s21/201903040006',
'201903040007' => '/var/www/db-s21/201903040007',
'201903040008' => '/var/www/db-s21/201903040008',
'201903040009' => '/var/www/db-s21/201903040009',
'201903040010' => '/var/www/db-s21/201903040010',
'201903040011' => '/var/www/db-s21/201903040011',
'201903040012' => '/var/www/db-s21/201903040012',
'201903040013' => '/var/www/db-s21/201903040013',
'201903040014' => '/var/www/db-s21/201903040014',
'201903040015' => '/var/www/db-s21/201903040015',
'201903040016' => '/var/www/db-s21/201903040016',
'201903040017' => '/var/www/db-s21/201903040017',
'201903040018' => '/var/www/db-s21/201903040018',
'201903040019' => '/var/www/db-s21/201903040019',
'201903040020' => '/var/www/db-s21/201903040020',
'201903040021' => '/var/www/db-s21/201903040021',
'201903040022' => '/var/www/db-s21/201903040022',
'201903040023' => '/var/www/db-s21/201903040023',
'201903040024' => '/var/www/db-s21/201903040024',
'201903040025' => '/var/www/db-s21/201903040025',
'201903040026' => '/var/www/db-s21/201903040026',
'201903040027' => '/var/www/db-s21/201903040027',
'201903040028' => '/var/www/db-s21/201903040028',
'201903040029' => '/var/www/db-s21/201903040029',
'201903040030' => '/var/www/db-s21/201903040030',
'201903040032' => '/var/www/db-s21/201903040032',
'201903040034' => '/var/www/db-s21/201903040034',
'201903040035' => '/var/www/db-s21/201903040035',
'201903040036' => '/var/www/db-s21/201903040036',
'201903040037' => '/var/www/db-s21/201903040037',
'201903040038' => '/var/www/db-s21/201903040038',
'201903040039' => '/var/www/db-s21/201903040039',
'201903040040' => '/var/www/db-s21/201903040040',
'201903040041' => '/var/www/db-s21/201903040041',
'201907040064' => '/var/www/db-s21/201907040064',

'201902030003' => '/var/www/db-s21/201902030003',
'201902030004' => '/var/www/db-s21/201902030004',
'201902030008' => '/var/www/db-s21/201902030008',
'201902030009' => '/var/www/db-s21/201902030009',
'201902030010' => '/var/www/db-s21/201902030010',
'201902030011' => '/var/www/db-s21/201902030011',
'201902030012' => '/var/www/db-s21/201902030012',
'201902030013' => '/var/www/db-s21/201902030013',
'201902030015' => '/var/www/db-s21/201902030015',
'201902030017' => '/var/www/db-s21/201902030017',
'201902030022' => '/var/www/db-s21/201902030022',
'201902030024' => '/var/www/db-s21/201902030024',
'201902030025' => '/var/www/db-s21/201902030025',
'201902030027' => '/var/www/db-s21/201902030027',
'201902030028' => '/var/www/db-s21/201902030028',
'201902030042' => '/var/www/db-s21/201902030042',
'201902030043' => '/var/www/db-s21/201902030043',
'201902030044' => '/var/www/db-s21/201902030044',
'201902030045' => '/var/www/db-s21/201902030045',
'201902030046' => '/var/www/db-s21/201902030046',
'201902030047' => '/var/www/db-s21/201902030047',
'201902030048' => '/var/www/db-s21/201902030048',
'201902030050' => '/var/www/db-s21/201902030050',
'201902030051' => '/var/www/db-s21/201902030051',
'201902030053' => '/var/www/db-s21/201902030053',
'201902030054' => '/var/www/db-s21/201902030054',
'201902030055' => '/var/www/db-s21/201902030055',
'201902030056' => '/var/www/db-s21/201902030056',
'201902030057' => '/var/www/db-s21/201902030057',
'201902030058' => '/var/www/db-s21/201902030058',
'201902030059' => '/var/www/db-s21/201902030059',
'201902030060' => '/var/www/db-s21/201902030060',
'201902030061' => '/var/www/db-s21/201902030061',
'201902030062' => '/var/www/db-s21/201902030062',
'201902030063' => '/var/www/db-s21/201902030063',
'201902030065' => '/var/www/db-s21/201902030065',
'201902030066' => '/var/www/db-s21/201902030066',
'201902030067' => '/var/www/db-s21/201902030067',
'201902030068' => '/var/www/db-s21/201902030068',
'201902030069' => '/var/www/db-s21/201902030069',
'201902030070' => '/var/www/db-s21/201902030070',
'201902030071' => '/var/www/db-s21/201902030071',
'201902030072' => '/var/www/db-s21/201902030072',
'201902030073' => '/var/www/db-s21/201902030073',
'201902030074' => '/var/www/db-s21/201902030074',
'201902030075' => '/var/www/db-s21/201902030075',
'201902030076' => '/var/www/db-s21/201902030076',
'201902030077' => '/var/www/db-s21/201902030077',
'201902030078' => '/var/www/db-s21/201902030078',
'201902030079' => '/var/www/db-s21/201902030079',
'201902030080' => '/var/www/db-s21/201902030080',
'201902030081' => '/var/www/db-s21/201902030081',
'201902030082' => '/var/www/db-s21/201902030082'
);

// input encoding for iconv
$iconv_input_encoding = 'UTF-8';

// date() format for file modification date
// Doc - https://www.php.net/manual/en/datetime.format.php
$datetime_format = 'd.m.y H:i:s';

// Allowed file extensions for create and rename files
// e.g. 'txt,html,css,js'
$allowed_file_extensions = 'html,htm,txt,css,js,json,svg';

// Allowed file extensions for upload files
// e.g. 'gif,png,jpg,html,txt'
$allowed_upload_extensions = 'gif,png,jpg,jpeg,html,htm,txt,css,js,json,svg,ico,pdf';

// Favicon path. This can be either a full url to an .PNG image, or a path based on the document root.
// full path, e.g http://example.com/favicon.png
// local path, e.g images/icons/favicon.png
$favicon_path = '';

// Files and folders to excluded from listing
// e.g. array('myfile.html', 'personal-folder', '*.php', ...)
$exclude_items = array(
    '*.php',
    'assets',
    'libs',
    'SleekDB',
    'database'
);

// Online office Docs Viewer
// Availabe rules are 'google', 'microsoft' or false
// google => View documents using Google Docs Viewer
// microsoft => View documents using Microsoft Web Apps Viewer
// false => disable online doc viewer
$online_viewer = 'microsoft';

// Sticky Nav bar
// true => enable sticky header
// false => disable sticky header
$sticky_navbar = true;


// max upload file size
$max_upload_size_bytes = 5000;

// Possible rules are 'OFF', 'AND' or 'OR'
// OFF => Don't check connection IP, defaults to OFF
// AND => Connection must be on the whitelist, and not on the blacklist
// OR => Connection must be on the whitelist, or not on the blacklist
$ip_ruleset = 'OFF';

// Should users be notified of their block?
$ip_silent = true;

// IP-addresses, both ipv4 and ipv6
$ip_whitelist = array(
    '127.0.0.1',    // local ipv4
    '::1'           // local ipv6
);

// IP-addresses, both ipv4 and ipv6
$ip_blacklist = array(
    '0.0.0.0',      // non-routable meta ipv4
    '::'            // non-routable meta ipv6
);

?>
