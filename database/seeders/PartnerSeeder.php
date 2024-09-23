<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Link;
use App\Models\Partner;
use App\Models\Type;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partners = [
            [
                "name_tm"=> "Bay boutique",
                "level"=> 4,
                "categories"=> "4",
                "description_rus"=> "Интернет-магазин женского нижнего белья @bay_boutique_tm - бронзовый партнёр бизнес-каталога @barde.biz Женское нижнее бельё – одна из главных частей гардероба. Чтобы выглядеть женственнее и увереннее в себе в любой ситуации интернет-магазин @bay_boutique_tm подберёт для вас лучшие модели, которые скроют недостатки вашей фигуры и подчеркнут её главные достоинства. В данном магазине представлены удобные и красивые комплекты по привлекательным ценам. Большим преимуществом онлайн-системы является то, что вы можете сделать заказ не выходя из дома. Здесь вы найдёте огромное количество бюстгальтеров, комплектов, халатов и купальников разных расцветок. Весь товар в наличии.Если вы ищете недорогое женское белье высокого качества,  @bay_boutique_tm – это именно то, что вам нужно.",
                "description_tm"=> "Gelin-gyzlaryň içki eşikleriniň onlaýn dükany @bay_boutique_tm @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nGyz-gelinleriñ içki eşikleri şkafyň esasy bölegini tutýar. Islendik ýagdaýda özüne ynamy bolan  zenan görmegeý görünmek üçin @bay_boutique_tm onlaýn dükany saýlap alýar. Siz öz kemçilikleriñizi gizläp we owadanlygyñyza has görk berýän iň oňat modelleri saýlap bilersiñiz. Bu dükan özüne çekiji bahalarda amatly we owadan içgi eşikleriñ köp gornüşlerini hödürleýär. Onlaýn ulgamyň uly artykmaçlygy, öýüňiziň rahatlygyndan çykman islendik zatlary sargyt edip bilmeklikdir. Bu ýerde köp sanly içki eşikleri, hammam halatlary we dürli reňkli kupalnikleri, teniñize näzik duýgusyny berýän gije geýilýän eşikleri tapyp bilersiňiz. Hemme harytlar ätiýaçda.\nElýeterli ýokary hilli içki eşik gözleýän bolsaňyz, @bay_boutique_tm siziň hyzmatyñyzda!\nHil bahadan ýokary!",
                "instagram"=> "bay_boutique_tm ",
                "phone"=> "53-24-04"
            ],
            [
                "name_tm"=> "Nazira shop",
                "level"=> 6,
                "categories"=> "4",
                "description_rus"=> "Магазин женской стильной одежды @nazirashoptm – бронзовый партнёр бизнес-журнала @barde.biz                                              Покупка новой одежды, а также обновление гардероба, всегда благотворно влияет на женское настроение. В магазине @nazirashoptm любые покупки будут в радость. Благодаря огромному выбору представленных товаров можно создать самые модные и актуальные образы. Покупая одежду здесь, вы получите возможность подарить себе ощущение радости и удовлетворения от того, что станете еще красивее. Строгая классика или легкая романтика, женственность или спортивный стиль - мы такие разные, но нас связывают одни и те же желания=> быть красивой, успешной и желанной!Огромный ассортимент одежды включает в себя множество разновидностей платьев, брюк, спортивных и деловых костюмов, обуви, аксессуаров и многое другое, что, несомненно, обрадует представительниц прекрасного пола.",
                "description_tm"=> "Aýallaryň ajaýyp geýim-gejim dükany @nazirashoptm, @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nTäze eşik satyn almak, geýimleri täzelemek, elmydama gyz-gelinleriñ keýpine peýdaly täsir edýär. @Nazirashoptm dükanynda islendik satyn alynan eşik siziň göwnüñizi göterer. Hödürlenýän önümleriň köpdürliligi bilen bolsa siz iň ajaýyp keşbi döredip bilersiňiz. Bu ýerde eşik satyn alsaňyz, örän ajaýyplaşyp özüňize şatlyk we kanagatlanma duýgusyny bermäge mümkinçilik taparsyñyz.\nGaty klassika ýa-da ýeňil romantika, näziklik ýa-da sport stili, olar biri-birinden tapawutlanýarlar, ýöne şol bir wagtyñ özünde olary birleşdirýàn bir zat bar, ol hem owadan we üstünlikli görünmekdir!\nGeýimleriň köp görnüşi köýnekleriň, balaklaryň, sport we iş kostýumlarynyň, aýakgaplaryň we başga-da köp zatlary öz içine alýan bu dükan iñ ynjyk zenanyñ göwnünden turjakdygy şübhesizdir.",
                "address"=> "ТЦ «Gülistan»,(Русский базар) 2 этаж, магазин № 21",
                "instagram"=> "nazirashoptm",
                "phone"=> "+99362251838"
            ],
            [
                "name_tm"=> "Çeper eller",
                "level"=> 6,
                "categories"=> "4",
                "description_rus"=> "Мастер ручной работы @cheper_eller – бронзовый партнёр бизнес-журнала @barde.biz                                                                     Искусство вышивания известно нам с глубокой древности. У туркмен испокон веков высоко ценится ручная работа, что безусловно вызывает восторг и восхищение у окружающих. Ручная работа национальных вышивок создавалась по канонам, сформированным в течение тысячелетий.Элемент, созданный руками, никогда не повторяется. Элемент, который был создан, как выражения души человека ценится больше, чем вещица, созданная в массовом производстве. Вышивка ручной работы на одежде не теряет своей актуальности и по сей день. Красивый элемент приятно удивит ваших друзей, привлечет внимание окружающих, выделит вас из толпы. И @cheper_eller вам в этом помогут.",
                "description_tm"=> "bardebiz biznes źurnalynyň bürünç hyzmatdaşy\nKeşdeçilik we el iş sungaty bize gadymy döwürlerden bäri mälimdir. Gadymy döwürlerden bäri el hünärine türkmenleriň arasynda ýokary baha berilýär, bu bolsa daşary ýurtlaryñ we biziñ daš töweregimizdäki adamlaryñ göwnünden turýar we haýran galdyrýar. El bilen ýasalan milli nagyşlar müňlerçe ýyl bäri döredilen däplere laýyklykda döredilipdir.\nEller bilen döredilen nusgalar hiç haçan gaýtalanmaýar. Adamyň ruhuny aňlatmak üçin döredilen nusgalar, köpçülikleýin önümçilikde döredilen eserden has gymmatlydyr.\nEgin-eşikleriñ elde dokalan gornüşleri şu güne çenli öz döwrepaplygyny ýitirmeýär. Owadan nusgada dokalan nagyşlar dostlaryňyzy haýran galdyrar, başgalaryň ünsüni özüne çeker we sizi köpçüligiň arasynda tapawutlandyrar.\nBu meselede @cheper_eller size kömek eder.",
                "instagram"=> "cheper_eller",
                "phone"=> "+993 62 159010"
            ],
            [
                "name_tm"=> "Golden fish dresses",
                "level"=> 6,
                "categories"=> "3",
                "description_rus"=> "Студия вечерних платьев «GF» @goldenfish_dresses_tm - бронзовый партнёр бизнес-журнала @barde.biz                                          Праздники, корпоративы, фотосессии, торжественные мероприятия - на любом знаменательном событии женщина хочет выглядеть превосходно. Покупка нового наряда обойдётся намного раз дороже, чем прокат , ведь выходить в свет в одном и том же платье более одного раза непрестижно. Студия  @goldenfish_dresses_tm\nпредлагают вам большой выбор роскошных платьев на любой вкус и бюджет. \nПочему вы должны выбрать именно @goldenfish_dresses_tm?                • Прокат платья обойдётся намного дешевле, нежели ее покупка\n• В прокат входят качественные наряды, находящиеся в идеальном состоянии\n• Предоставлена широкая линейка аксессуаров\n• Можно подобрать наряды как на официальные мероприятия, так и на молодежные вечеринки. Благодаря @goldenfish_dresses_tm\nвы будете выглядеть на всех событиях блистательно и каждый раз удивлять окружающих новыми образами.",
                "description_tm"=> "\"GF\"agşam köýnekleriniň studiýasy @goldenfish_dresses_tm @bardebiz biznes źurnalynyň bürünç hyzmatdaşy\nBaýramçylyklar, köpçülikleýin oturylyşyklar, surata düşürişler, toý dabaralar we islendik möhüm wakalarda gyz-gelinler ajaýyp görünmek isleýärler. Täze eşik satyn almak wagtlaýynja almakdan has köp çykdaýjysy bar, Studiýa @goldenfish_dresses_tm\nher gyz-geliniñ öz islegine görä we býujetine görä size kaşaň köýnekleriň köp görnüşini hödürleýär.\nNäme üçin @goldenfish_dresses_tm saýlamaly?\n• Köýnegi wagtlaýynça almak, köýnek satyn almakdan has arzandyr\n• agşam köýnekleriniň studiýasy ýokary derejeli ýokary hilli eşikleri öz içine alýar\n• Aksesuarlaryň giň toplumy\n• Resmi çärelere we toý dabaralaryna eşik saýlap bilersiňiz\n@Goldenfish_dresses_tm bilen siz ähli wakalarda ajaýyp görünersiňiz we her gezek täze suratlar bilen başgalary geň galdyrarsyňyz.\nDiňe iň gowulary üçin!",
                "address"=> "ТЦ «Ашхабад» 4 этаж, 408 магазин",
                "instagram"=> "goldenfish_dresses_tm",
                "phone"=> "+99362956163"
            ],
            [
                "name_tm"=> "Enesh Turaýewa",
                "level"=> 6,
                "categories"=> "4",
                "description_rus"=> "Создатель неповторимых украшений @eneshturayeva - бронзовый партнёр бизнес-журнала @barde.bizКогда мы выбираем себе украшения, мы всегда ищем себе что-то уникальное, что непременно подчеркнёт наш  неповторимый стиль.\nВ мире, где вещи создаются по шаблону, хочется выделиться оригинальностью. И нам в этом помогают украшения ручной работы. Ведь подобные изделия обладают особой энергетикой и авторским почерком. @eneshturayeva - создатель изысканных украшений! Дизайнерские серьги - это не только красивая вещь в гардеробе, но и способ выражения своей индивидуальности. Каждое изделие сохраняет в себе частичку души создателя. Будьте яркими, стильными, женственными с @eneshturayeva",
                "description_tm"=> "Özboluşly şaý-sepleri döredýän @eneshturayeva, @bardebiz biznes źurnalynyň bürünç hyzmatdaşy\nÖzümiz üçin şaý-sepleri saýlanymyzda, elmydama özboluşly stilimizi nygtajak üýtgeşik bir zat gözleýäris.\nAdaty durmuşyñ gündelik başagaÿlagynda biz özümiziñ özboluşlylygymyz bilen tapawutlanmak isleýäris. El bilen ýasalan şaý-sepler bu meselede bize kömek edýär. Galyberse-de, şeýle önümleriň aýratyn öwüşgüni we Awtoryň stili bar.\n@eneshturayeva ajaýyp şaý-sepleri dörediji!\nDizaýner gulakhalkalar diňe bir şkafyñ owadan bezegi bolman, eýsem şahsyýetiňizi görkezmegiň usulydyr diýip belläp geçýär. Her önüm döredijiniň kalbynyň bir bölegini saklaýar.\n@Eneşturaýewa bilen ajaýyp zenan boluň!",
                "instagram"=> "eneshturayeva",
                "phone"=> "+993 65 856232"
            ],
            [
                "name_tm"=> "Kepil logistika",
                "level"=> 6,
                "categories"=> "8",
                "description_rus"=> "Транспортно-логистическая компания @kepillogistics - бронзовый партнёр бизнес-каталога @barde.biz                                                                              Компания @kepillogistics - специалист в сфере предоставления транспортно-логистических услуг. Главное направление деятельности - организация и сервисное сопровождение международной доставки грузов любой сложности. Они перебирают на себя выполнение всех функций по организации, контролю и сопровождению грузоперевозки товаров, обеспечивают надежность процесса, решают сложные, нестандартные задачи. Вы можете рассчитывать на их максимально эффективно выполненную работу. Ваш груз будет доставлен вовремя и в сохранности, несмотря на тип поставки. @kepillogistics - грузоперевозки по ВСЕМУ МИРУ!",
                "description_tm"=> "Ulag we logistika kompaniýasy @kepillogistics, @bardebiz biznes źurnalynyň bürünç hyzmatdaşy\n@kepillogistika transport we logistika Hyzmatlaryny hödürlemek boýunça hünärmen. Bu kärhananyñ esasy işi, islendik çylşyrymly harytlaryň halkara ulgamynda eltilmegine gözegçilik etmek we hyzmat goldawyny bermek.\nHarytlaryň daşalmagyny guramak, gözegçilikde saklamak we goldamak, amalyň ygtybarlylygyny üpjün etmek we çylşyrymly, adaty däl meseleleri çözmek ýaly ähli funksiýalary ýerine ýetirýärler.\nSiz bu kompaniýa iň çylşyrymly işleri şübhesiz ynanyp bilersiñiz. Ýüküňiz görnüşine garamazdan wagtynda we ygtybarly eltiler.\n@kepillogistika - Bütin dünýäde ýük daşamak!,+99364 88 85 08,+99365 85 48 03",
                "address"=> "Й. Дурдыева, здание \"Ak Enar\"",
                "instagram"=> "kepillogistics",
                "phone"=> "+99365854803,+99364888508",
                "email"=> "kepillogistik7@gmail.com"
            ],
            [
                "name_tm"=> "Aýnulýa beauty",
                "level"=> 6,
                "categories"=> "5",
                "description_rus"=> "Студия красоты @aynulya_beauty - бронзовый партнёр бизнес-журнала @barde.biz                                                                                                                 Женская красота завораживает и вдохновляет, покоряет и сводит с ума. Женщины готовы её усилить или хотя бы на шаг приблизиться к идеалу. Ваши стремления разделяет и студия красоты @aynulya_beauty , в котором работает команда тактичных мастеров, влюблённых в своё дело и творящие чудеса. Студия красоты @aynulya_beauty предлагает вам широкий спектр профессиональных услуг=> маникюр и педикюр, наращивание , окрашивание, шугаринг, пудровое напыление бровей, большой выбор  парикмахерских услуг и многое другое. Результат превзойдёт все ваши ожидания! Приходите в @aynulya_beauty и преображайтесь!",
                "description_tm"=> "aynulya_beauty gözellik studiýasy @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nGyz-gelinleriñ gözelligi özüne çekýär her ýigidi gyzyklandyrýar, ruhlandyrýar, we mejnun edýär. Gyz-gelinler öz tebigy gözelligini berkitmäge ýa-da iň bolmanda idealdan bir ädim ýakynlaşmaga taýyndyrlar. Siziň iñ ynjyk islegleriňizi kanagatlandyryp biljek öz işine aşyk bolan sypaýy ussatlar topary @aynulya_beauty gözellik studiýasynda size sabyrsyzlyk bilen garaşýarlar.\n@aynulya_beauty gözellik studiýasy size dürli hünär Hyzmatlaryny hödürleýär=> manikýur we pedikýur, saçlara boýag bermek, teniñizi şeker bilen arassalamak, gaşlara boýag bermek, saç kesmek Hyzmatlarynyň giň topary we başgalar. Netije bolsa ähli garaşýan zatlaryňyzdan ýokary bolar!\n@Aýnulya_beauty-a geliň we öz durmuşyñyzy gözelleşdiriñ!\nIş wagty=> 09=>00 - 22=>00\nBelgi=> +993 64 657772\nSalgysy=> 14-nji tapgyra \"Dokma Senagat\"topface_cosmeticstm@icloud.com ",
                "address"=> "14 этап «Dokma Senagat»",
                "instagram"=> "aynulya_beauty",
                "phone"=> "+993 64 657772",
                "email"=> "topface_cosmeticstm@icloud.com"
            ],
            [
                "name_tm"=> "Ak Gaya",
                "level"=> 6,
                "categories"=> "12",
                "description_rus"=> "Магазин строительных и хозяйственных материалов @akgaya_store - бронзовый партнёр бизнес-журнала @barde.biz                                               Жизнь в современном мире протекает в быстром темпе. Отгородиться от множества незнакомых людей можно в  доме или квартире. Сегодня каждый имеет возможность обустроить своё «гнёздышко», начиная со строительства частной собственности или ремонта имеющейся квартиры. Магазин @akgaya_store предлагает своим клиентам более тысячи товаров=> • Обои, стеновые панели\n• Кафель, ламинат, линолеум \n• Сантехника, мебель для ванной\n• Строительные смеси\n• Лакокрасочные материалы \n• Двери и фурнитура\n• Освещения\n• Крепёжные изделия (болты, гайки, гвозди, саморезы, винты, шайбы и т.д.)\n• Мебель\n• Рабочий инвентарь\n• Электроинструменты и многое другое!                                                                Здесь работают профессиональные продавцы-консультанты, которые помогут вам грамотно подобрать любой товар с оптимальным соотношением «цена-качество».",
                "description_tm"=> "ar dükany, @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nHäzirki zaman dünýäsinde biziñ durmuşymyz çalt depginde hereket edýär. Jaýda ýa-da öýde siz nätanyş adamlardan üzňeleşip bilersiňiz. Häzirki wagtda her kim hususy emlägi gurmakdan ýa-da bar bolan öýleri abatlamakdan başlap, öz ýaşaýyş jaýlaryny enjamlaşdyrmaga mümkinçilik bilen peýdalanýarlar.\n@Akgaya_store dükany müşderilerine müňden gowrak önümleri hödürleýär=>\n• Diwar kagyzy, diwar panelleri\n• Plitkalar, laminat, linolyum\n• Suw geçiriji, hammam mebelleri\n• Gurluşyk garyndylary\n• Boýaglar we laklar\n• Gapylar we enjamlar\n• Yşyklandyryş\n• Berkidijiler (boltlar, hozlar, öz-özüne degýän nurbatlar, nurbatlar, ýuwujylar we ş.m.)\n• Mebel\n• Iş sanawy\n• Güýç gurallary we ş.m.\nBu ýerde işleýän hünärmenler we satuw geñeşiçiler iň amatly bahalardan bolan islendik önümi başarnykly saýlamaga kömek ederler.\n@akgaya_store dükanyna hoş geldiňiz!\nIş wagty=> 08=>00 - 22=>00\nSalgysy=> G.Kuliýewa  köç. Söwda merkezi “Al Gaya” (мир объездная),+993 64 664488\n575757\n575555",
                "address"=> "ул. Г. Кулиева ТЦ “Al Gaya” (Мир Объездная)",
                "instagram"=> "akgaya_store",
                "phone"=> "575757,575555,+993 64 664488",
                "email"=> "info@akgaya.com"
            ],
            [
                "name_tm"=> "Döwlet molla",
                "level"=> 6,
                "categories"=> "9",
                "description_rus"=> "Ведущий различных мероприятий  @dowletmolla - бронзовый партнёр бизнес-журнала @barde.biz                                                                  Ни одно массовое мероприятие не обходится без ведущего. Это тот человек, которому вы доверяете успех вашего праздника. Ведущий не только ведёт  мероприятие , исполняя все пункты сценария, но и улавливает атмосферу зала, легко подстраивается под любую публику. К выбору ведущего нужно подойти с полной ответственностью и тогда ваш праздник пройдёт на одном дыхании.@dowletmolla с радостью обсудит с вами сценарий до мельчайших деталей, полностью погрузится в процесс подготовки и создаст ту самую непередаваемую атмосферу события.\nОн изучит особенности вашего события и коллектива, предложит самые лучшие сценарии и конкурсы, проведёт незабываемый яркий  и весёлый праздник. Доверьтесь лучшему шоумену , вы не ошибётесь с выбором! ",
                "description_tm"=> "Dürli görnüşindäki şowhunly çäreleri alyp baryjy @dowletmolla @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nHiç bir toý dabarany alyp baryjysyz göz öñüne getirmek mümkin däl. Diňe bir ssenariýa boýunça hereket etmän eýsem zalyň atmosferasyny hem özüne çekip, islendik tomaşaçylara aňsatlyk bilen şatlyk paýlap gyzyklandyryp bilýän adamdyr.\nSiziň iñ ýatdan çykmajak pursatlaryñyzy ýatda galyjy edip biljek toý alyp baryjysyny saýlanyñyzda doly jogapkärçilik bilen çemeleşmeli, şonda dynç alyşyňyz bir demde geçiriler.\n@dowletmolla, ssenariýany iň ownuk jikme-jikliklere çenli ara alyp maslahatlaşmakdan, taýýarlyk işine doly çümmekden we wakanyň iñ täsirli atmosferasyny döretmekden öz işiniñ ussady.\nOl geçiriljek çäräňiziň aýratynlyklaryny öwrenip, iň oňat ssenariýalary we ýaryşlary hödürläp we ýatdan çykmajak ýagty we şadyýan dynç alyş agşamy döreder.\nIň oňat alyp baryjysyna ynanyň we siz ýalňyşmarsyñyz!\n@dowletmolla,+993 64 151139",
                "instagram"=> "dowletmolla",
                "phone"=> "+993 64 151139"
            ],
            [
                "name_tm"=> "Mergen clip",
                "level"=> 6,
                "categories"=> "9",
                "description_rus"=> "Студия профессиональных видеографов и фотографов @mergenclip - бронзовый партнёр бизнес-журнала @barde.biz                                     В нашей жизни происходят много значимых дат, которые хочется сохранить в памяти надолго. Запечатлеть эти моменты, чтобы вспоминать их снова и снова. Чудесные события жизни, будь то день рождения, новый год, путешествие, свадьба  - это счастье, радость и только прекрасные эмоции. \nИ студия @mergenclip с удовольствием вам в этом поможет. Хотите снять рекламный ролик, чтобы большинство потенциальных клиентов стали реальными? Хотите снять имиджевый ролик, чтобы о вас говорили, что стиль - это Ваша фишка? Хотите снять «Love story», который можно будет с гордостью показать своим друзьям, а потом и детям?Тогда вам следует обратиться именно в @mergenclip. Нужно отметить, что @mergenclip знает как превратить крутую идею в успешный клип. За его спиной множество созданных музыкальных клипов, завоевавшие сердца тысяч зрителей.",
                "description_tm"=> "Professional wideograflaryň we suratçylaryň studiýasy @mergenclip @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nDurmuşymyzda uzak wagtlap ýatda saklamak isleýän möhüm senelerimiz bar. Şol pursatlary gaýtalap ýatlamak üçin @mergenclip saýlap alyñ. Durmuşyň ajaýyp wakalary, doglan güni bolsun, täze ýyl bolsun, syýahat, toý bolsun - bu bagt, şatlyk we diňe ajaýyp duýgular.\n@Mergenclip studiýasy bu meselede size kömek etmekden hoşal bolar.\nBu stil siz bilen baglanyşlykly diýdirmek üçin, suratly wideo düşürmek isleýärsiňizmi?\nDostlaryňyza, soň bolsa çagalaryňyza buýsanç bilen görkezip boljak \"Söýgi hekaýasyny\"düşürmek isleýärsiňizmi?\nOnda siz @mergenclip bilen habarlaşmaly.\n@Mergenclip-iň ajaýyp pikiri üstünlikli klipe öwürmegi bilýändigini bellemelidiris. Onuň arkasynda müňlerçe tomaşaçylaryň ýüregini gazanan köp sanly döredilen aýdym-saz wideolary bar.\n@Mergenclip siziň hyýaly arzuwlaryñyzy wideo geçirip biler!\n@mergenclip,+993 61 700427",
                "instagram"=> "mergenclip",
                "phone"=> "+993 61 700427"
            ],
            [
                "name_tm"=> "Didar stylist",
                "level"=> 6,
                "categories"=> "5",
                "description_rus"=> "Профессиональный стилист-визажист @didar_stylist - бронзовый партнёр бизнес-каталога @barde.biz                                                                            Правильно выполненный макияж и прическа - это уверенность в себе. В особенности, когда выглядеть безупречно просто необходимо.@didar_stylist предлагает вам воспользоваться услугами профессионального стилиста-визажиста. Свадьба, день рождения, фотосессия, выпускной бал или другое торжественное мероприятие- это те самые поводы, когда девушка должна чувствовать себя Королевой, ведь ваше лицо - это ваша визитная карточка.\nИ какой бы вид вы не выбрали - результат будет превосходить ожидания. Будучи уже искусным мастером своего дела @didar_stylist ведёт профессиональное обучение курса «Сам себе визажист».",
                "description_tm"=> "Professional stilist-makiýaź ussady @didar_stylist @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nDogry ýerine ýetirilen makiýaź we owadan bezelen saç özüñe bolan ynamy köpeldýär. Sebäbi nepis görünmek hökmany zatlaryñ biridir.\n@didar_stylist sizi professional makiýaź artistçy Hyzmatlaryndan peýdalanmaga çagyrýar. Toý, doglan gün, fotosessiýa ýa-da başga bir dabaraly waka - bular gyzyň şa aýal ýaly duýulmaly pursatlary, sebäbi siziň ýüzüňiz siziň üstünligiñizdir.\nIşiñ haýsy görnüşini saýlasaňyzam, netije garaşylýandan has ýokary bolar.\nŞeýle hem hünärleri taýýarlamakda @didar_stylist \"Öz öźüñ üçin makiýaź artistçy\"kursy üçin hünär taýýarlygy geçirýär.\n@Didar_stylist bilen özboluşly görnüşiňizi dörediň!\n@didar_stylist,+993 64 017063\n474308\nGözellik studiýasy “Zhannet Gulyan sungat öýi” köç. Andalib 76",
                "address"=> "Студия красоты “Zhannet Gulyan art house” ул. Андалиба 76",
                "instagram"=> "didar_stylist",
                "phone"=> "+993 64 017063, 474308"
            ],
            [
                "name_tm"=> "Kagyz turba",
                "level"=> 6,
                "categories"=> "10",
                "description_rus"=> "Производитель бумажных труб, гильз, катушек для рулонного материала «Kagyz turba» - бронзовый партнёр бизнес-каталога @barde.biz                                                                                       Почти все промышленные фабрики и предприятия, как большие, так и маленькие, которые производят либо перематывают различные материалы в рулонах, приобретают гильзы из картона разного объема и плотности у “Kagyz turba”.Несмотря на активное применение гильз, большинство людей не знакомы с данным видом целлюлозно-бумажной продукции. Картонные гильзы, шпули или, как их называют в обиходе, втулки - бумажные трубки определенного диаметра, толщины и высоты для намотки в рулоны и катушки. Например, для ткани, ниток, пряжи, сеток, плёнок, линолеума и строительных материалов. В быту гильзы встречаются в туалетной бумаге, бумажных полотенцах, пергаменте и фольге, пищевой пленкой и бумагой для принтера.\nОдним из преимуществ втулок является их многократное использование. У “Kagyz turba” вы можете заказать изготовление картонной шпули (гильзы) практически любого размера и характеристик под различные типы продукции.",
                "description_tm"=> "\"Kagyz turba\"kagyz materiallary üçin kagyz turbalaryny, ýeňlerini öndüriji - @bardebiz biznes źurnalynyň bürünç hyzmatdaşy\nRulonlary öndürýän uly we kiçi senagat zawodlarynyň we kärhanalarynyň hemmesi diýen ýaly dürli materiallary, kagyz turbasyndan dürli göwrümli we dykyzlykly karton ýeňleri \"Kagyz turba\"satyn alýarlar.\nGilzany işjeň ulanylmagyna garamazdan, köp adam pulpa we kagyz önümleri bilen tanyş däl.\nOlar karton ýeňler, talonlar ýa-da gündelik durmuşda atlandyrylyşy ýaly, pürsler - rulonlara aýlanmak üçin belli bir diametrli kagyz turbalary.  Mysal üçin, mata, ýüplük, torlar, linolyum we gurluşyk materiallary üçin.\nGündelik durmuşda ýeňler hajathana kagyzlarynda, kagyz polotensalarynda, pergamentde, folga we printer kagyzlarynda bolýar.\n\"Kagyz turba\"-dan dürli önümler üçin islendik ululykdaky we häsiýetindäki karton çeňňegi (ýeňi) öndürip bilersiňiz.,+993 65 686013\ngarlysazakow@mail.ru\nHerrikgala",
                "phone"=> "+993 65 686013",
                "email"=> "garlysazakow@mail.ru"
            ],
            [
                "name_tm"=> "Hatyja han",
                "level"=> 6,
                "categories"=> "4",
                "description_rus"=> "Дом моды “Hatyja han” - бронзовый партнёр бизнес-каталога @barde.biz  @hatyja_han_nazenin - модное пространство, центр моделирования любой сложности исполнения одежды в котором работает команда профессионалов. Здесь вам сошьют платье из самых дорогих тканей со всего мира с учётом размеров и особенностей фигуры. \nВам осуществлят индивидуальный пошив одежды ручной работы, что гарантирует уникальность модели и высокое качество.Стиль и мода играет большое значение в нашей жизни. Они проявляют внутренний мир человека.  Важно, чтобы каждый нашёл свой стиль, свою гармонию. И @hatyja_han_nazenin безусловно в этом поможет. Человек, который посетит Дом моды, соприкоснётся с красотой, роскошью, изяществом.",
                "description_tm"=> "“Hatyja han” modalar öýi, @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\n@hatyja_han_nazenin moda giňişligi bolup, işleýän hünärmenler toparynyň her bir geýimiñ üstünde jikme-jik işläp, döredýän lybaslaryñ  ýerine ýetirişine uly üns berýärler. Bu ýerde her bir zenanyñ şekiliň ululygyny we aýratynlyklaryny göz öňünde tutup, dünýäniň iň gymmat matalaryndan köýnek tikilýär.\nEl işleriñ goşulmagy bilen tikilýän eşikleriň aýratynlygy, bu modalar öýüniñ özboluşlylygyny we ýokary hilini kepillendirýär.\nStil we moda durmuşymyzda uly orun tutýar. Adamyň içki dünýäsini görkezýär. Her kim öz stilini, sazlaşygyny tapmagy möhümdir. Bu meselede @hatyja_han_nazenin hökman kömek eder.\nModa öýüne baryp gören adam gözellik, kaşaňlyk, nepislik bilen gatnaşyga girer.\n@hatyja_han_nazenin\n61-40-88\n15-nji tapgyra, \"Aşgabat\"söwda merkezi, #B212",
                "address"=> "15 этап, ТЦ «Ашхабад», #B212",
                "instagram"=> "hatyja_han_nazenin",
                "phone"=> "61-40-88"
            ],
            [
                "name_tm"=> "Nepis sungat",
                "level"=> 6,
                "categories"=> "10",
                "description_rus"=> "Создатель ковров и ковровых изделий @nepis.sungat- бронзовый партнёр бизнес-журнала @barde.biz                                          Ковровые изделия- художественно-декоративные изделия бытового назначения, могут быть изготовлены как ручным, так и машинным способом.\nК ним относятся => ковры, ковровые дорожки, коврики.Преимущества моделей ручной работы=>\n🟢 долговечность\n🟢 использование натуральных \nматериалов\n🟢эксклюзивность                                                                 @nepis.sungat занимается ткачеством национальных сумок. \nРучное ткачество несёт уют, тепло, при этом сохраняя и передавая уклад туркменского народа из поколения в поколение. Во время создания изделий мастер контролирует характеристики используемых материалов и, разумеется, сам процесс, что свидетельствует о достойном качестве производимого товара.  \nРазличные виды ковров и ковровых изделий ручной работы высокого качества только у @nepis.sungat!",
                "description_tm"=> "Haly we haly önümlerini döreden @ nepis.sungat, @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nHaly önümleri - öý hojalygy üçin çeper we bezeg önümleri el bilen we maşyn arkaly ýasalyp bilner.\nOlara şular girýär=> halylar, palaslar, kiçi halylar\nEl bilen ýasalan modelleriň artykmaçlyklary=>\n🟢 çydamlylygy\n🟢Natural tebigy önümleri ulanmak\n🟢materiallar\n🟢   jikme-jiklik\n🟢 ýokary hilli\n@ nepis.sungat milli torbalary ýagny gyz-gelinleriñ göterýän el sumkalaryny hem dokaýarlar\nElde haly dokamak, türkmen halkynyň nesilden-nesle dowam edip gelýän däbidir. Olar her bir maşgala rahatlyk we ýylylyk getirýär. Önümler döredilende ussa ulanylýan materiallaryň aýratynlyklaryna we elbetde öndürilen önümleriň hilini gözegçilik edýär.\nDiňe @ nepis.sungat-dan ýokary hilli elde ýasalan halylaryň  dürli görnüşlerini tapyp bilersiñiz!\n@ nepis.sungat,+993 61 803756\nnepis.sungat@gmail.com",
                "instagram"=> "nepis.sungat",
                "phone"=> "+993 61 803756",
                "email"=> "nepis.sungat@gmail.com"
            ],
            [
                "name_tm"=> "Soltan çüý",
                "level"=> 6,
                "categories"=> "10",
                "description_rus"=> "Производитель гвоздей “Soltan çüý” - бронзовый партнёр бизнес-каталога @barde.biz                                                                                                                   Первый и единственный производитель гвоздей @asuda_turkmen в Туркменистане предлагает широкий выбор гвоздей разных видов. Гвозди всегда нужны нам, независимо от того, строите ли вы дом или проводите ремонт. \nДанный крепёж очень востребован и играет большую роль при строительстве несмотря на свой размер. Поэтому к их качеству предъявляются определённые требования. @asuda_turkmen предоставляет возможность изготовления гвоздей по требованию заказчика.\nСуществует множество видов гвоздей=>\n* Строительные гвозди (самые распространённые)\n* Винтовые (витые) гвозди\n* Финишные (вагоночные) гвозди\n* Трефовые гвозди\n* Гвозди-шурупы\n* Ершеные (гребенчатые) гвозди \n* Шиферные гвозди \n* Толевые гвозди \nКомпания “Soltan çüý” зарекомендовала себя на рынке высоким качеством своей продукции.",
                "description_tm"=> "Çüý öndüriji “Soltan çüý” @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nTürkmenistanda @asuda_turkmen çüýleri ilkinji we ýeke-täk öndürijileri bolup, dürli çüýleriñ giň görnüşini hödürleýär. Jaý gurýarsyňyzmy ýa-da abatlaýarsyňyzmy, onda bize hemişe çüýler gerek.\nBu berkidijä uly isleg bildirilýär we ululygyna garamazdan gurluşykda uly orun tutýar. Şonuň üçin olaryň hiline belli bir talaplar goýulýar.\n@asuda_turkmen, müşderiniň talaplaryna laýyklykda çüýleri öndürmek ukybyny üpjün edýär.\nÇüýleriñ köp görnüşi bar=>\n* Gurluşyk çüýleri (iň köp ýaýran)\n* Buraw (bükülen) çüýler\n* Şurup çüýleri\n* Çüýl nurbatlary\n* Çüýler\n* Dam çüýleri\n“Soltan çüýler” kompaniýasy önümleriniň ýokary hili bilen bazarda özüni tanatdy.\n@asuda_turkmen\nAhal welaýat, Anew köç. Senagat, 3A,+993 62 248633,+993 62 248908,+993 62 249059\ninfo@asudaturkmen.com\nasudaturkmen.com",
                "address"=> "Ахалский велаят, г. Анау, ул. Индустриальная, 3А",
                "instagram"=> "asuda_turkmen",
                "phone"=> "+993 62 248633,+993 62 248908,+993 62 249059",
                "email"=> "info@asudaturkmen.com"
            ],
            [
                "name_tm"=> "Aýa türkmen milli lybaslary",
                "level"=> 6,
                "categories"=> "3",
                "description_rus"=> "Салон проката мужских национальных костюмов “Aýa türkmen milli lybaslary” - бронзовый партнёр бизнес-журнала @bardebiz.\nТуркменский национальный костюм - выразительное явление духовной культуры нашего сплочённого народа. \nТуркменская национальная одежда отражает традиции, показывает, из какого региона прибыл его носитель, а также соответствует укладу жизни в месте его рождения. Национальные орнаменты на костюмах несут в себе и обереги. Каждый элемент в одежде продумывался до мелочей и выполняет 2 функции=>\n1. Показывает статус человека в обществе\n2. Выполняет своё бытовое назначение \n “Aýa türkmen milli lybaslary” предоставляет такую услугу, как прокат национальных мужских костюмов абсолютно всех размеров по приятным ценам.  \n@aya_milli_turkmen_esikler гарантируют=>\n* качество одежды\n* качество обслуживания \n* широкий выбор одежды\n* экономию средств\nАренда - лучшее решение!",
                "description_tm"=> "Ýigitleriñ milli eşiklerini wagtlaýynça berilýän  salon \"Aýa türkmen milli lybaslary\"bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nTürkmenleriň milli eşigi, agzybir halkymyzyň ruhy medeniýetiniň egsilmez baýlygymyzdyr.\nTürkmenleriň milli geýimi biziñ däp-dessurlarymyzy  görkezýär, geýimiñ haýsy sebitden gelendigini görkezýär we doglan ýerinde ýaşaýyş durmuşyna-da laýyk gelýär. Geýimlerdäki milli nagyşlar hem biziñ özboluşlylygymyzy göterýär. Egin-eşikdäki her bir nagyşlary 2 ulgamy ýerine ýetirýär=>\n1. Adamyň jemgyýetdäki ýagdaýyny görkezýär\n2. Öý hojalygynyň maksadyny ýerine ýetirýär\n“Aýa türkmen milli lybaslary” milli ululykdaky kostýumlary, ähli ululykdaky bahalary arzan bahadan kärendesine almak ýaly hyzmaty hödürleýär.\n@aya_milli_turkmen_esikler kepilligi=>\n* eşikleriň hili\n* hyzmatyň hili\n* eşikleriň giň görnüşi\n* çykdajylary tygşytlamak\nLybaslary wagtlaýyn almak iň oňat çözgütdir!\nOguz Han (Aýtakowa) köç, Owadan 3 merkezi.\n@aya_milli_turkmen_esikler,+993 65 849224,+993 63 814454",
                "address"=> "Ул. Огуз хана (Айтакова), Центр свадебных услуг «Овадан».",
                "instagram"=> "aya_milli_turkmen_esikler",
                "phone"=> "+993 65 849224,+993 63 814454"
            ],
            [
                "name_tm"=> "Mährem ojak",
                "level"=> 6,
                "categories"=> "9",
                "description_rus"=> "Мастерица искусства гобелена @bahar_pirgulyyewa - бронзовый партнёр бизнес-журнала @bardebiz.\nГобелен - это изысканная картина ручной работы в раме, которая украсит место в вашем доме, придаст комфорт, уют и тепло. Гобелены в интерьере добавит изящность и неповторимый колорит. На Западе они считались коллекционным искусством, которое совмещает в себе таланты художника, дизайнера, ткача.\nВ то время создание картин могло составлять несколько лет, поэтому они очень ценятся. Подобную роскошь могли себе позволить не многие.\n@bahar_pirgulyyewa воплотит любой жанр и сюжет в картине из гобелена.\nВы можете заказать у неё свою картину, которая будет олицетворять ваше состояние и настроение.\nБлагодаря подобным изделиям в вашем помещении будет царить некая благородность и аристократичность.\nПодлинные ценители искусства непременно оценят ручную работу профессионала.\n@bahar_pirgulyyewa также предоставляет такую услугу, как изготовление той пай  высокого качества по доступной цене на различные мероприятия.\nДобро пожаловать в мир высокого искусства!",
                "description_tm"=> "Gobelen sungatynyñ ussady @bahar_pirgulyyewa, @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nGobelen öýüňizdäki içinde rahatlyk we ýylylyk berjek çarçuwada elde ýasalan ajaýyp surat eseridir. Gobelenler siziň öýüñize nepislik we ajaýyp özboluşlylyk goşar. Günbatarda suratkeşleriñ, dizaýnerleriñ, dokmaçylaryñ zehinini özünde jemleýän toparlaýyn sungat hasaplanýar.\nŞol döwürlerde suratlaryň döredilmeginiñ üstünde birnäçe ýyllaryñ dowamynda işlenilipdir, şonuň üçinem şol döwürler suratkeşlik sungatyna ýokary baha berilipdir. Şonuñ ýaly kaşaňlyga köp adamlar üçin elýeterli bolmandyr.\n@bahar_pirgulyyewa islendik real we hakyky wakalary gobelena geçirýär.\nSiz islendik hyýalyñyzdaky surat eseri ondan sargyt edip bilersiňiz.\nGobelen bezeginiñ kömegi bilen otagyňyz belli bir aristokratiýa durkuna geler. Sungaty biliji hünärmenler bolsa el işlere hökman suratda ýokary baha bererler.\nŞeýle hem @bahar_pirgulyyewa, dürli görnüşindäki toý paÿlary elýeterli bahalardan taýýarlaýar.\nSungat älemine hoş geldiňiz!\n@bahar_pirgulyyewa,+99365671359",
                "instagram"=> "bahar_pirgulyyewa",
                "phone"=> "+99365671359"
            ],
            [
                "name_tm"=> "Paýhas merkezi",
                "level"=> 6,
                "categories"=> "9",
                "description_rus"=> "Технологическая компания “Paýhas merkezi” - бронзовый партнёр бизнес-журнала @bardebiz.\n@payhas_merkezi предоставляет  инжиниринговый сервис, который включает в себя как комплексные решения, так и сервис узкой направленности. Помимо этого, @payhas_merkezi осуществляют весь спектр IT услуг\nПромышленный инжиниринг=>\n🔹 Сборка и ввод в строй промышленного оборудования\n🔹 Проекты производства под ключ\n🔹 Сервисное обслуживание производственных линий и станков\n🔹Технико-технологический консалтинг\n🔹 Комплексные поставки оборудования \nИнформационные технологии=>\n🔸 «Умный склад»\n🔸 MES система “Tehnologiki Seljeriş”\n🔸 RFID\n🔸Разработка веб-приложений \n🔸 Разработка десктопных приложений \n🔸 Проектирование и наладка сетевой и серверной текстуры\n@payhas_merkezi помогает отечественному бизнесу развиваться и преодолевать трудности в своем деле.",
                "description_tm"=> "Tehnologiýa kompaniýasy “Paýhas merkezi” @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\n@payhas_merkezi çylşyrymly çözgütleri we içgin meseleleri çözýän hyzmatyny öz içine alýar. Mundan başga-da, @payhas_merkezi IT Hyzmatlarynyň doly toplumyny hödürleýär\nSenagat injiniring=>\nIndustrial Senagat enjamlaryny gurnamak we işe girizmek\n🔹 Açyk önümçilik taslamalary\nProduction Önümçilik liniýalaryna we maşynlaryna hyzmat etmek\nEchTehniki we tehnologiki maslahat beriş\nEquipment Enjamlaryň çylşyrymly üpjünçiligi\nMaglumat tehnologiýasy=>\nSmart \"Akylly ammar\"ES MES ulgamy “Tehnnyk Sel Use”\n🔸RFID\n“Web programmasynyň ösüşi\n🔸 Stol programmasyny işläp düzmek\n🔸 Tor we serwer teksturasynyň dizaýny we sazlamasy\n@payhas_merkezi içerki kärhanalara öz işindäki kynçylyklary ösdürmäge we ýeňmäge kömek edýär.\n@payhas_merkezi\nst. 2127 (G. Kuliýewa), d.43,+993 12 75 35 34\ninfo@payhas.tm\npayhas.tm",
                "address"=> "Ул. 2127 (Г. Кулиева), д.43",
                "instagram"=> "payhas_merkezi",
                "phone"=> "+993 12 75 35 34",
                "email"=> "info@payhas.tm",
                "website"=>"payhas.tm"
            ],
            [
                "name_tm"=> "Mähirli puf",
                "level"=> 5,
                "categories"=> "11",
                "description_rus"=> "Магазин бескаркасной мебели @kreslo_puf_tm - серебряный партнёр бизнес-журнала @bardebiz.\nБескаркасные кресла-мешки и пуфы идеально впишутся в интерьер детской комнаты, спальной, на даче. Они давно успели завоевать сердца многих любителей отдыха. Благодаря отсутствию жесткого каркаса мешок подстраивается под ваше  тело и обеспечивает ему максимальный комфорт и удобство.\nПуфы имеют ряд преимуществ=>\n- просты в уходе\n- не впитывают влагу\n- сохраняют тепло\n- экологичные\n- комфортные\nВ магазине @kreslo_puf_tm вы найдёте большой выбор кресел. Маленький вес мягких пуфиков позволяет без затратных усилий переместить их в любое нужное вам место. С этой задачей справятся даже детки.",
                "description_tm"=> "Çarçuwaly mebel dükany @kreslo_puf_tm @bardebiz biznes źurnalynyň bürünç hyzmatdaşy.\nÇarçuwaly mebeller çagalar otagynyň, ýatylýan otagyň ýa-da kottejiň içki otaglaryñ bezegi bolup durýar. Köp wagtdan bäri mebelleriñ bu görnüşleri dynç alyjylaryñ uly söýgüsini gazanmagy başardylar. Gaty çarçuwanyň ýoklugy sebäpli ýumşak torbalary bedene uýgunlaşyp iň ýokary rahatlygy we amatlylygy üpjün edýärler.\nÝumşak torbalaryñ birnäçe aýratynlyklary bar=>\n- ideg etmek aňsat\n- çyglylygy siňdirenok\n- ýyly saklaýar\n- ekologiýa taýdan arassa\n- amatly\n@Kreslo_puf_tm dükanynda köp sanly ýumşak oturguçlary tapyp bilersiňiz. Ýumşak puflaryñ ýeñil bolmagy olary zerur ýerlere aňsatlyk bilen geçirmäge mümkinçilik berýär. Bu meseläni hatda çagalar hem çözüp bilerler.\n@kreslo_puf_tm,+993 65 806994,+993 65 809526\n“UMBRO”, Mag. 40\nmahirlipuf@gmail.com",
                "address"=> "ТЦ “Garaşsyzlygyň 15 ýyllygy”, здание “UMBRO”, маг. 40",
                "instagram"=> "kreslo_puf_tm",
                "phone"=> "+993 65 806994,+993 65 809526",
                "email"=> "mahirlipuf@gmail.com"
            ],
            [
                "name_tm"=> "Kenguru",
                "level"=> 5,
                "categories"=> "10",
                "description_rus"=> "Производитель куриной и говяжьей тушёнки @kengurutm - серебряный партнёр бизнес-журнала @bardebiz.\nМясные консервы - это находка для путешествий и поездок. Они не нуждаются в особых условиях хранения и не занимают много места. Тушёнка - тот самый продукт, который выручит в сложных ситуациях.\nКомпания @kengurutm, основанная в 2020 году, занимается производством говяжьей и куриной тушёнки высшего качества по традиционной рецептуре 1984 года. В производстве используется только отборная говядина и филе кур, выращенных в естественных условиях.\nПродукты проходят строгий контроль качества и все необходимые лабораторные испытания. Великолепный вкус тушёнки @kengurutm не оставит равнодушным ни одного покупателя!\nКачество важнее ГОСТа.",
                "description_tm"=> "Towuk we sygyr etinden tuşonka önümini öndüriji @kengurutm, @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\nKonserwirlenen et syýahat söýüjiler üçin amatly tiz tagamlaryñ biridir. Olara saklamak üçin ýörite ammar şertleri gerek däl we kän ýer tutmaýar. Konserwirlenen tuşonka kyn ýagdaýlarda elmydama gol astynda bolup kömek etjek önümdir.\n2020-nji ýylda döredilen @kengurutm, 1984-nji ýyldaky däpler esasynda öndürilip gelýän ýokary hilli sygyr we towuk eti. Önümçilikde diňe tebigy şertlerde ösdürilip ýetişdirilen sygyr eti we towuk fileler ulanylýar.\nÖnümler berk hil gözegçiligi we ähli zerur laboratoriýa synaglaryndan geçýärler. @Kengurutm ajaýyp tagamy hiç bir müşderini biperwaý galdyrmaz!\nHil GOST-dan has möhümdir.\n@kengurutm-da iň tagamly konserwirlenen tuşonka önümleri!\n@kengurutm,+993 65 819485",
                "instagram"=> "kengurutm",
                "phone"=> "+993 65 819485"
            ],
            [
                "name_tm"=> "IT Hyzmat",
                "level"=> 5,
                "categories"=> "14",
                "description_rus"=> "Сервисный центр “IT-Hyzmat” - серебряный партнёр бизнес-журнала @bardebiz.\nСервис-центр “IT-Hyzmat” предоставляет профессиональные и качественные услуги в сфере инновационных технологий и выстраивает отношения с клиентами, учитывая все их потребности.\nВ настоящее время “IT-Hyzmat” предоставляет следующие услуги=>\n• Техническое обслуживание и ремонт офисной техники (персональный компьютер, ноутбук, сервер, монитор, принтер, UPS и т.д.),\n• ремонт и заправка картриджей,\n• продажа картриджей, принтеров, расходных материалов для копировальных аппаратов и оргтехники.\n“IT-Hyzmat” зарекомендовал себя на рынке инновационных технологий как профессионал своего дела и надежный партнёр, который предоставляет качественные услуги.",
                "description_tm"=> "“IT-Hyzmat\"merkezi @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\n\"IT- Hyzmat\"merkezi innowasiýa tehnologiýalary ulgamynda hünärli we ýokary hilli Hyzmatlary hödürleýär we ähli zerurlyklaryny göz öňünde tutup müşderiler bilen gatnaşyk saklaýar.\nHäzirki wagtda “IT-Hyzmat” şu aşakdaky Hyzmatlary hödürleýär=>\n• Ofis enjamlaryna hyzmat etmek we abatlamak (şahsy kompýuter, noutbuk, serwer, monitor, printer, UPS we ş.m.),\n• Kartridjleri abatlamak we doldurmak,\n•  Ofis enjamlary üçin, kartridjleri, printerleri we beýleki sarp edilýän zatlary satmak.\n\"IT- Hyzmat\"innowasiýa tehnologiýalarynyň bazarynda ýokary hilli Hyzmatlary hödürläýän we ygtybarly hyzmatdaşy hökmünde özüni tanatdy.",
                "address"=> "ул. Гёроглы 6, Торговый центр (ВДНХ), 22-ой магазин.",
                "phone"=> "+993 (64) 98-22-66,10-73-33,50-51-91",
                "email"=> "ithyzmat@gmail.com"
            ],
            [
                "name_tm"=> "Mona Nesip",
                "level"=> 5,
                "categories"=> "10",
                "description_rus"=> "Производители хозяйственной продукции “Mona” и “Nesip” - серебряные партнёры бизнес-журнала @bardebiz.\n“Mona” - производитель хозяйственных товаров, который предлагает широкий спектр продукции данной категории.\nПродукция включает в себя=> влажные и сухие салфетки, мыла как для малышей, таки для взрослых, гель для душа, стиральный порошок, освежитель для воздуха, кондиционеры для белья и многое другое. \nОтвечают требованиям цены и качества.\n“Nesip” - предприятие, специализирующееся на производстве влажных салфеток в упаковке различных форматов. \nВлажные салфетки - незаменимое средство для бережного использования. Отличаются салфетки между собой не только запахами на любой вкус, но и функционалом. Наиболее популярные в нынешнее время антибактериальные. \nОни незаменимы в поездках, в школе, на работе, в женской сумочке. \n✔️Низкая цена\n✔️Высокая эффективность\n✔️Отвечает требованиям санитарии\nHealthy way of life!",
                "description_tm"=> "\"Mona\"we \"Nesip\"öý hojalyk önümlerini öndürijiler @bardebiz biznes źurnalynyň kümüş hyzmatdaşlary.\n“Mona” öý önümleriň köp görnüşini hödürleýän öý önümlerini öndürijidir.\nÖnümler şulary öz içine alýar=> çygly we gury süpürgiçler, çaga we ulular üçin sabynlar, duş geli, kir ýuwujy serişdeler, mata ýumşadyjylar we ş.m.\nÖz önümleriniñ baha we hil talaplaryny kanagatlandyrýar.\n“Nesip”, dürli ugurdaky gaplamalarda çygly süpürgiç öndürmekde ýöriteleşen kompaniýa.\nÇygly süpürgiçler öýüñ näzik ýerlerini seresaply süpürmek üçin aýrylmaz guraldyr. Süpürgiçler diňe bir ýakymly ysy bilen däl, eýsem ýokary hili bilen tapawutlanýar. Häzirki wagtda bu önümler antibakterial taýdan òrän meşhurdyr.\nOlar syýahatda, mekdepde, işde gyz-gelinleriñ torbasynda elmydama gol astynda bolup kömek edýärler. \n✔️Amatly bahalar\n✔️Ýokary netijelilik\n✔️Sanitariýa arassaçylyk talaplaryna laýyk gelýär\nSagdynlyk durmuşyñ ýoludyr!\nTelekeçi M. Orazow,+993 65 720134\nDolandyryjy M. Osmanow,+993 61 891199\norazowmona@mail.ru\ntmmona.com",
                "instagram"=> "orazowmona@mail.ru\ntmmona.com",
                "phone"=> "+993 65 720134,+993 61 891199",
                "email"=> "orazowmona@mail.ru",
                "website"=>"tmmona.com"
            ],
            [
                "name_tm"=> "Näz baby",
                "level"=> 5,
                "categories"=> "4",
                "description_rus"=> "Детский бренд одежды @nazbaby_fashion - серебряный партнёр бизнес-журнала @bardebiz.\nКаждый родитель хочет, чтобы его ребёнок носил хорошую, качественную одежду и всегда выглядел красиво и стильно. Поэтому большинство родителей в настоящее время предпочитают заказывать пошив детской одежды, который позволяет подчеркнуть индивидуальность ребёнка и выделить его из толпы.\nМатериалы для пошива в @nazbaby_fashion высокого турецкого качества, которые безопасны для ваших малышей. Присутствует большой выбор расцветок и доступные цены. Выбирайте все необходимое в зависимости от возраста вашего ребенка, сезона и потребностей.\nHandmade with love.",
                "description_tm"=> "Çagalaryň egin-eşik markasy @nazbaby_fashion, @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\nHer bir ene-ata çagasynyň gowy, ýokary hilli eşik geýmegini we elmydama owadan görünmegini isleýär. Şonuň üçin indi ene-atalaryň köpüsi çaganyň aýratynlygyny bellemäge we ony märekeden tapawutlandyrmaga mümkinçilik berýän çagalar eşikleriniň tikilmegini sargyt etmegi makul bilýärler.\n@Nazbaby_fashion-da tikilýän her bir egin-eşikleriñ materiallary, türkiñ iñ gowy matalaryndan saýlanylyp alynýar. Şeýle hem reňkleriň we elýeterli bahalaryň uly görnüşi sizi haýrana goýar. Çagaňyzyň ýaşyna, möwsümine we zerurlyklaryna baglylykda zerur zatlary saýlap alyp bilersiñiz!\nUly söýgi bilen tikilýän egin-eşikler.\n@nazbaby_ moda,+993 64 017868\n\"Berkarar\"söwda merkezi, 3-nji gat",
                "address"=> "ТЦ “Berkarar”, 3 этаж",
                "instagram"=> "nazbaby_fashion",
                "phone"=> "+993 64 017868"
            ],
            [
                "name_tm"=> "Merjen ýol ",
                "level"=> 5,
                "categories"=> "8",
                "description_rus"=> "Транспортно-логистическая компания @merjen_yol - серебряный партнёр бизнес-журнала @bardebiz.\nЛогистическая компания @merjen_yol  обладает необходимым опытом, знаниями и ресурсами, которые позволяют максимально эффективно доставить ваш груз как внутри, так и за пределами страны.\n @merjen_yol  гарантируют=>\n☑️ Надёжность \n☑️ Мобильность\n☑️ Качество\nВ зависимости от способа перевозки груза @merjen_yol выполняют=>\n◼️ железнодорожные \n◼️морские\n◼️авто \n◼️авиа\nС  @merjen_yol ваш груз будет доставлен в целости и сохранности в любую точку мира!",
                "description_tm"=> "Ulag we logistika kompaniýasy @merjen_yol, @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\nLogistika kompaniýasy @merjen_yol ýüküňizi ýurduň içinde we daşynda ýokary derejede eltmek üçin zerur tejribe, bilim we çeşmelere eýedir\n @merjen_yol kepillik geçýär.\n☑️Ygtybarlylyk\n☑️ Hereket\n☑️ Hil\nHarytlary daşamagyň usulyna baglylykda @merjen_yol şulary ýerine ýetirýär=>\n◼️ Demir ýol\n◼️Deñiz\n◼️Awto\n◼️Awia\n@Merjen_yol bilen ýüküňiz dünýäniň islendik ýerinde howpsuz we ygtybarly eltiler!\n@merjen_yol,+993 12 464114\nmerjenyol@merjenyol.com",
                "address"=> "Отель \"Olimpiya\", 2 этаж",
                "instagram"=> "merjen_yol",
                "phone"=> "+993 12 464114",
                "email"=> "merjenyol@merjenyol.com"
            ],
            [
                "name_tm"=> "Nur Aý",
                "level"=> 5,
                "categories"=> "11",
                "description_rus"=> "Магазин картин и ковров ручной работы @nuray_el_isleri - серебряный партнёр бизнес-журнала @bardebiz.\nВ магазине @nuray_el_isleri вы найдёте огромный ассортимент ковровых картин из шерсти и шелка с различными изображениями животных, пейзажей и достопримечательностей. \nОни производят ковры, ковровые изделия, молитвенные коврики (El Sajjadah), сумки, картины ручной работы на заказ по индивидуальным размерам, эскизам и цветовым сочетаниям.\n @nuray_el_isleri  имеют собственное производство ковров и ковровых картин в Туркменистане, что позволяет им быть гибкими и объективными по ценам. \nКовры в виде картины придадут вашей комнате неповторимое сочетание уюта и роскоши.",
                "description_tm"=> "Elde ýasalan surat we haly dükany @Nuray_el_isleri @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\n@Nuray_el_isler dükanynda haýwanlaryň, tebigatyñ gözelligini we dürli görnüşindäki ýüň we ýüpek haly suratlaryny tapyp bilersiňiz.\nOlar haly we haly önümlerinden önýän işleri, namazlyklary (El Sajjadah), el torbalary, elde ýasalan suratlaryñ aýratynlykda döredilýän dizaýn we reňk sazlaşygyndaky önümleri öndürýärler.\n@nuray_el_isleri, Türkmenistanda haly we haly suratlaryny taýýarlaýarlar, bu bolsa bahalara görä çeýe bolmaga mümkinçilik berýär.\nSurat görnüşindäki halylar otagyňyzda rahatlygyň we kaşaňlygyň ajaýyp özboluşlylygyny döreder.\n@nuray_el_isleri,+993 62 046317,+993 62 966667,+993 65 058924\n “Bagtyýarlyk” sòwda merkezi, 2-nji gat, 13-nji dükan",
                "address"=> "ТРЦ “Bagtyýarlyk”, 2 этаж, 13 магазин",
                "instagram"=> "nuray_el_isleri",
                "phone"=> "+993 62 046317,+993 62 966667,+993 65 058924"
            ],
            [
                "name_tm"=> "My boo",
                "level"=> 5,
                "categories"=> "4",
                "description_rus"=> "Студия бра-фиттинга нижнего белья @myboo_tm - серебряный партнёр бизнес-журнала @bardebiz.\nБра-фиттинг - это профессиональный подбор белья с учётом индивидуальных особенностей тела, которое будет идеально сидеть по фигуре.\nЗачем нужен бра-фиттинг?\n1️⃣ Правильно подобранное бельё - прежде всего, женское здоровье \nПроблемы с женским здоровьем часто связаны с ношением неправильного размера бюстгальтера. Маленький бюстгальтер давит на грудь, нарушая движение лимфы, что может увеличить риск развития рака груди\n2️⃣ Правильно подобранное бельё избавиться вас от боли в области груди, плечах\n3️⃣ Правильно подобранное бельё - это комфорт и удовольствие. \nПочувствуйте себя особенной!",
                "description_tm"=> "Içki geýim studiýasy @myboo_tm, @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\nBra-fiting, bedeniň aýratyn aýratynlyklaryny göz öňünde tutup, içki geýimleri saÿlap berýän içgi geýim studiýasy.\nBra-fiting näme üçin gerek?\n1️⃣ Dogry saýlanan içki eşikler, ilkinji nobatda gyz-gelinleriñ saglygyna peýdasy bar\nGyz-gelinleriñ saglygy bilen baglanyşlykly ýüze çykÿan meseleler köplenç nädogry ölçegde saýlanan geýimleri geýmek bilen baglanyşyklydyr. Dar geýimler, döşüňize basyş edýär, limfa akymynyň öňüni alýar, bu bolsa döş mäziniň döremek howpuny ýokarlandyryp biler.\n2️⃣ Dogry saýlanan içki eşikler döşdäki, egnindäki agyrylardan dyndyrar\n3️⃣ Dogry saýlanan içki eşik rahatlyk we lezzetdir.\nSiz iñ gowusyna mynasyp!\n@myboo_tm,+993 12 210466,+993 65 828818\nBS “Oguzkent”, Bitarap şaýoly, Türkmenistan, 231",
                "address"=> "БЦ “Oguzkent”, пр. Битарап Туркменистан, 231",
                "instagram"=> "myboo_tm",
                "phone"=> "+993 12 210466,+993 65 828818"
            ],
            [
                "name_tm"=> "Kids point",
                "level"=> 5,
                "categories"=> "10",
                "description_rus"=> "Магазин детских товаров и игрушек @kids_point.tm - серебряный партнёр бизнес-журнала @bardebiz.\nС самого детства игрушки привлекают внимание малышей. С возрастом ребёнок больше времени уделяет миру вокруг себя, а кубики, машинки, куклы становятся их путеводителями во всё новое. Благодаря им, детки открывают и познают для себя совсем ещё новый мир.\nИгрушки предоставляют возможность родителям мягко обучать своих детей.\nОднако главное назначение игрушек - развлечение. Вы можете купить яркие интересные детские товары, которые не позволят скучать и помогут весело провести время.\nВыбор игрушек в @kids_point.tm довольно обширный. Здесь вы найдёте и головоломки, и роботы, и кукол, и самолёты. Каждая игрушка выполнена из безопасных материалов.\nПреимущества магазина=>\n▪️высокое качество товара\n▪️огромный ассортимент\n▪️для детей всех возрастов\n▪️ приемлемые цены",
                "description_tm"=> "Çagalar üçin harytlar we oýunjaklar dükany @ kids_point.tm @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\nÇagalykdan oýnawaçlaryñ dürli görnüşleri çagalaryň ünsüni özüne çekýär. Çaganyñ ýaşy ulaldygyça daş-töweregine has köp wagt sarp edýärler. Şonuñ üçin çaganyñ durmuşynda oýunjaklar mòhüm orny eýeleýärler. Kublar, çaga Awtoulaglary, gurjaklar täze zatlaryň hemmesine ýol görkeziji bolýar. Çagalar oýnawaçlaryñ üsti bilen özleri üçin täze bir dünýä açýarlar we öwrenýärler.\nOýnawaçlar ene-atalara çagalaryny ýuwaşlyk bilen terbiýelemäge mümkinçilik berýär.\nŞeýle hem bolsa, oýunjaklaryň esasy maksady güýmenje. \n@ Çagalar_point.tm-de dükanynda oýnawaçlaryñ köp görnüşleri bar. Bu ýerde robotlary, gurjaklary we uçarlary tapyp bilersiňiz. Her oýunjaklar ygtybarly materiallardan ýasalýar.\nDükanyň peýdaly taraplary\n•Ýokary hilli önüm\n•Oýunjaklaryñ köp görnüşleri\n•Dürli ýaşdaky çagalar üçin oýunjaklar\n• Amatly bahalar\n@ kids_point.tm,+993 64 509752\nTähran köç, \"Aşgabat\"söwda merkezi,\nblok A, 2-nji gat, A-2.05 D.",
                "address"=> "ул. Техран, ТРЦ “Aşgabat”,блок А, 2 этаж, А-2.05 D",
                "instagram"=> "kids_point.tm",
                "phone"=> "+993 64 509752"
            ],
            [
                "name_tm"=> "Hilli tilsimat",
                "level"=> 5,
                "categories"=> "13",
                "description_rus"=> "IT-компания @hillitilsimat - серебряный партнёр бизнес-журнала @bardebiz.\nHilli tilsimat - многопрофильная и высокотехнологичная IT-компания, которая постоянно развивается и стремится стать лучшим и универсальным поставщиком IT-услуг.\nКомпания специализируется на следующих услугах=>\n•    Поставка, установка и обслуживание компьютерного оборудования, включая серверы, сетевое оборудование и т.д. через наших партнеров \/ поставщиков (Dell, Lenovo, HP, Palo Alto Networks, Cisco, Logitech и другие);\n•    Разработка веб-сайтов и мобильных приложений; \n•    Графический дизайн и 2D\/3D анимация. \nКоманда @hillitilsimat использует новейшие технологии в разработке и создаёт качественные и современные дизайнерские решения.",
                "description_tm"=> "IT kompaniýasy @hillitilsimat @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\nHilli tilsimat hemişe ösýän we iň oňat we köpugurly IT Hyzmatlary üpjün edijisi bolmaga çalyşýan köp ugurly we ýokary tehnologiýaly IT kompaniýasydyr.\nKompaniýa şu aşakdaky Hyzmatlarda ýöriteleşýär=>\n • Hyzmatdaşlarymyzyň (Dell, Lenovo, HP, Palo Alto Networks, Cisco, Logitech we başgalar) üsti bilen serwerleri, tor enjamlaryny we kompýuter enjamlary bilen üpjün etmek we gurmak  \n• Web sahypalaryny we ykjam programmalary gurnamak\n • Grafiki dizaýn we 2D \/ 3D animasiýa.\n@Hilltilsimat topary ösüşde iň täze tehnologiýalary ulanýar we ýokary hilli we döwrebap dizaýn çözgütlerini döredýär.\n @hilltilsimat,+993 12 754673,+993 63 992933\nhi@hilltilsimat.com\n G.Kuliýew köç, “Türkmen Deri” binasy 3-nji gat",
                "address"=> "Ул. Г. Кулиева, 64, здание “Türkmen Deri”, 3 этаж",
                "instagram"=> "hillitilsimat",
                "phone"=> "+993 12 754673,+993 63 992933",
                "email"=> "hi@hillitilsimat.com"
            ],
            [
                "name_tm"=> "Lady Diamond",
                "level"=> 5,
                "categories"=> "3",
                "description_rus"=> "Свадебный дом @lady_____diamond - серебряный партнёр бизнес-журнала @bardebiz.\nСвадьба - знаменательное событие в нашей жизни, тот день, который останется в памяти навсегда.\nСвадебный дом @lady_____diamond представляет  вашему вниманию огромный ассортимент изящных свадебных платьев, которые являются отражением нежности, роскоши, грации. Для каждой невесты важно найти то самое платье. Профессиональные консультанты-стилисты непременно помогут вам с этим выбором.\nГлавным преимуществом свадебного дома является то, что вы сможете собрать полный образ в одном месте.\nМастера подарят вам незабываемые эмоции, выполнят невероятный макияж и стильную причёску в такой важный день. \nВыбирая платье, начни с лучшего!",
                "description_tm"=> "lady_diamond toý öýi, @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\nToý durmuşymyzda iñ möhüm wakalarynyñ biri bolup, ýadymyzda hemişelik galýar.\nToý öýi @lady_diamond bolsa näzikligiň, kaşaňlygyň, merhemetiň beýany bolan ajaýyp toý köýneklerini size hödürleýär. Her bir gelin üçin göwnüñ isleýän köýnegini tapmak örän möhümdir.\nUssat toý geňeşçiler elbetde, bu saýlawda size kömek ederler.\nToý öýüniň esasy artykmaçlygy bolsa, doly toý suduryny bir ýerde ýygnap bilmekdir.\nŞeýle möhüm günde ajaýyp makiýaź we kaşañ saç bezegi ýerine ýetirýän toý ussatlar size ýatdan çykmajak duýgulary bererler.\nKöýnek saýlanyňyzda iň gowusyndan başlaň!\n@Lady_diamond bilen!\n@lady_diamond,+993 65 725928\n Bitarap Türkmenistan (Podwoýskiý köçesi) Hojalyk öýi “Göwher”",
                "address"=> "Пр. Битарап Туркменистан (ул. Подвойского) Дом быта “Göwher”",
                "instagram"=> "lady_____diamond",
                "phone"=> "+993 65 725928"
            ],
            [
                "name_tm"=> "Bahar perdeler",
                "level"=> 5,
                "categories"=> "11",
                "description_rus"=> "Магазин оконного декора @baharay_perdeler_official - серебряный партнёр бизнес-журнала @bardebiz.\nОформление окон рулонными шторами, тюлями - одно из лучших стильных и современных решений. Это помогает не только защитить помещение от солнечного света, но и добавить уюта в интерьер. Наличие штор демонстрирует прекрасный вкус.\nМагазин @baharay_perdeler_official предлагает огромный выбор текстильных изделий=>\n▪️Карнизы\n▪️Тюли\n▪️Портьеры\n▪️Рол-шторы\n▪️Зебра шторы\n▪️Аксессуары\n▪️Покрывала и подушки\n▪️Жалюзи всех видов\nПридайте уют своему дому с @baharay_perdeler_official !",
                "description_tm"=> "Penjire bezeginiñ dükany @Baharay_perdeler_official @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\nPenjireleri rulonly perdeler we týul bilen bezemek iň oňat we döwrebap çözgütleriň biridir. Bu otagy diňe gün şöhlesinden goramaga kömek etmän, öýüñ içerki rahatlygyny döredýär. Her bir öýde owadan we kaşañ perdeleriň bolmagy, öýüñ bezeginiñ aýrylmaz bir bölegi bolup durýar.\n@baharay_perdeler_official dükany dokma önümleriniň köp görnüşini hödürleýär=>\n•Karnizlar\n•Tutular\n•Rol perdeler\n•Aýlaw perdeler\n•Zebra perdeler\n•Ýorgan we ýassyklar\n•Perdeleriñ dürli görnüşleri\nÖýüňize @baharay_perdeler_official bilen rahatlyk goşuñ!\n@baharay_perdeler_official\n72 51 62\n65 49 48\nMir 7 “Bereketli” bazary, dükan 136\nImo=> +993 62 816048\nMarydaky belgiler=> +993 64 303739",
                "address"=> "Мир 7, “Bereketli” базар, магазин 136",
                "instagram"=> "baharay_perdeler_official ",
                "phone"=> "72 51 62, 65 49 48"
            ],
            [
                "name_tm"=> "Gerekli",
                "level"=> 5,
                "categories"=> "13",
                "description_rus"=> "Инновационный маркетплейс @gereklitm - серебряный партнёр бизнес-журнала @bardebiz.\nGerekli -  онлайн торговая площадка, которая в разы облегчит вам покупки.\nПреимущества онлайн-покупок в @gereklitm=>\n🔹ШИРОКИЙ АССОРТИМЕНТ\nВ @gereklitm вы сможете найти более 15 тысячи различных товаров\n🔹ДОСТУПНЫЕ ЦЕНЫ\nСамые низкие цены только у них!\n🔹КАЧЕСТВО\nВ @gereklitm только качественные товары. Убедитесь в этом сами.\n🔹ДОСТАВКА\n@gereklitm доставят товар в любую точку страны.\n🔹 ПОДАРОЧНЫЕ СЕРТИФИКАТЫ\n@gereklitm угодят даже самым привередливым. Обрадуйте своих близких, подарив им данный сертификат. Благодарю ему они смогут оплатить стоимость заказа.\n🔹ПРОГРАММА ЛОЯЛЬНОСТИ\nСобирайте бонусы и получайте скидки\nГарантия лучшей цены!",
                "description_tm"=> "Innowasiýa bazary @gereklitm @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\nGerekli onlaýn bazary siziň söwdañyzy has ýeñilleşdirer.\n@Gereklitm-de onlaýn söwda etmegiň peýdalary=>\n 🔹Önümleriñ köp görnüşleri\n@Gereklitm-de 15 müňden gowrak önümleriñ dürli görnüşlerini tapyp bilersiñiz \nAmatly bahalar\nIñ arzan bahalar diñe bärde!\n🔹Hil\n@gereklitm-de diňe ýokary hilli önümler bar. Özüňiz saýlap görüň.\n🔹Eltip bermek Hyzmatlary\n@gereklitm harytlary ýurduň islendik ýerine eltip bererler\n🔹 Sowgat sertifikatlary\n@gereklitm, iñ ynjyk müşderileriñ göwnünden hem turar. Bu sowgat sertifikatlary bilen ýakynlaryňyzy begendiriñ. Şonuñ bilen sargydyňyzyñ bahasyny töläp bilersiñiz.\n🔹 Bonus maksatnamasy\nBonuslary ýygnaň we arzanladyş alyň\nIň oňat baha kepilligi!\n@gereklitm,+993 64 065666\ngerekli.tm \ninfo@gereklitm.com",
                "instagram"=> "gereklitm",
                "phone"=> "+993 64 065666",
                "email"=> "info@gereklitm.com"
            ],
            [
                "name_tm"=> "Hilal collection\\kozha",
                "level"=> 5,
                "categories"=> "10",
                "description_rus"=> "Онлайн-магазин мужской одежды @hilal__collection - серебряный партнёр бизнес-журнала @bardebiz.\nЕсли вы предпочитаете активный образ жизни, связанный с туризмом, развлечениями, то подбирайте для этого подходящую одежду. Она должна быть комфортной и не доставлять никаких неудобств. @hilal__collection рады предложить вам огромный ассортимент одежды для мужчин.\nЗдесь вы можете приобрести спортивные штаны, кофты, толстовки на любой цвет и вкус. \n@hilal__collection,+993 65 693655\nА также магазин кожаных и текстильных изделий предлагает вам большие возможности выбора и покупки различных тканей. Вдобавок к этому, они предоставляют такую услугу, как обивка мебели и салона машины. Используются материалы только высокого качества.",
                "description_tm"=> "Ýigitleriñ eşikler dükany @hilal__collection @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\nSyýahatçylyk, güýmenje bilen baglanyşykly işjeň durmuş ýörelgesini halaýan bolsaňyz, munuň üçin dogry eşik saýlaň. Bu eşikler göwnüñize rahat bolup hiç hili oňaýsyzlyk döretmeli däl. @hilal__collection size oglan-ýigitler üçin köp görnüşindäki eşikleri hödürlemekden hoşal.\nBu ýerde öz göwnüñize görä dürli reňkdäki köýnekleri we switerleri satyn alyp bilersiňiz.\n@hilal_collection,+993 65 693655\nDeriden we dokma dükanyndan başga-da matalaryñ dürli görnüşlerini satyn alyp bilersiñiz. Bulardan başga-da, mebelleriň we Awtoulag interýerleriñ bezegi ýaly Hyzmatlary hödürleýärler. Bu ýerde diňe ýokary hilli önümler ulanylýar.,+993 65 693655\nBu dükan şu ýerde ýerleşýär=>\nBedew (Harby wekillik)\n📍G.Kuliýewa köçesi, Şanly Bedew N9",
                "address"=> "Данный магазин находится по адресу=>\n📍Bedew (Harby wekillik)\n📍Ул. Г. Кулиева Şanly Bedew N9",
                "phone"=> "+99365693655"
            ],
            [
                "name_tm"=> "Dameli",
                "level"=> 5,
                "categories"=> "4",
                "description_rus"=> "Дом высокой моды @dameli_hautecouture - серебряный партнёр бизнес-журнала @barde.biz.\nВысокая мода, или “Haute couture” по-французски, означает создание эксклюзивных моделей, которые производятся по заказу клиента.\nВысокая мода - высший сегмент модной индустрии. Серьёзным леди важно выглядеть элегантно, превосходно и уверенно. А что может быть лучше для уверенности в себе, чем идеально сшитая одежда по параметрам фигуры?\nВ @dameli_hautecouture имеются в наличии готовая одежда, платья в евро-туркменском и национальных стилях. \nВам сошьют платья с дорогих и эксклюзивных тканей. \nКаждое платье в @dameli_hautecouture неповторимое, так как будет сшито по вашим индивидуальным меркам.\nЗдесь вы почувствуете себя Королевой!",
                "description_tm"=> "Modalar öýi @dameli_hautecouture @barde.biz biznes źurnalynyň kümüş hyzmatdaşy.\nÝokary moda ýa-da fransuz dilinde \"Haute couture\", sargyt etmek üçin özboluşly aýratyn lybaslaryñ döredilmegini aňladýar.\nÝokary moda, moda pudagynyň iň ýokary derejesidir. Hakyky zenanyň owadan, ajaýyp we özüne ynamly görünmegi möhümdir. Özüňi ynamly duýmak üçin suduryña gelişjek ajaýyp eşiklerden has gowy zat näme?\n@dameli_hautecouture-de taýyn köýnekler, ýewropa we türkmen köýnekleri ýagny milli äheňdäki eşikleri sargyt edip bilersiñiz.\nSize ýokary hilli özboluşlyl matalardan köýnek tikiler.\n@Dameli_hautecouture-daky her bir köýnek, aýratyn ölçegleriňize görä tikilýän üýtgeşik lybaslardyr.\nBu ýerde siz özüňizi Şa aýaly ýaly duýarsyňyz!\n@dameli_hautecouture,+993 64 602222\ngucci.rb@mail.ru\n A.Niýazow (Çehow), \"Tylla toprak\"jaýy",
                "address"=> "Проспект А. Ниязова (Чехова), дом «Tylla toprak»",
                "instagram"=> "dameli_hautecouture",
                "phone"=> "+993 64 602222",
                "email"=> "gucci.rb@mail.ru"
            ],
            [
                "name_tm"=> "Studio M",
                "level"=> 5,
                "categories"=> "5",
                "description_rus"=> "Салон красоты «Менгли» - серебряный партнёр бизнес-журнала @barde.biz \nКаждая женщина хочет выглядеть превосходно независимо от обстоятельств и времени года. \nВ салоне «Менгли» ваши желания превратятся в реальность, а\nмастера воплотят любой образ.  \nК вашим услугам=>\n▪️Косметология\n▪️Макияж\n▪️Шугаринг - Воск\n▪️Наращивание ногтей\n▪️Наращивание волос (холодное, горячее)\n▪️Окрашивание волос\n▪️Мелирование\n▪️Балаяж\n▪️Кератиновое выпрямление\n▪️Химическая завивка волос\n▪️Причёски \n▪️Стрижки\n▪️Афрокосы \n▪️Аквагрим \nХотите выглядеть всегда молодой и красивой? Тогда не пропускайте приёмы по уходу за собой. Многочисленные хорошие отзывы свидетельствуют о том, что салон «Менгли» - доверенное место",
                "description_tm"=> "\"Mengli\"gözellik salony - @barde.biz biznes źurnalynyň kümüş hyzmatdaşy \nHer bir gyz-gelinler durmuşymyzdaky bolup geçýän şertlere we möwsüme garamazdan owadan görünmek isleýärler.\n\"Mengli\"gözellik salonynda siziň islegleriňiz hakykata öwrüler we ussalar islendik keşbi janladyryp bererler. \nSiziň hyzmatyňyzda=>\n• Kosmetologiýa\n• Makiýaź etmek\n• Şekerli we woskly epilasiýa\n• Dyrnak ösdürmek\n• Saç ösdürmek (sowuk we gyzgyn)\n• Saç boýagy\n• Melirowaniýe\n• Balaýaj\n• Keratinli saçlary tekizlemek\n• Himiki usulda saçlary küdür etmek\n• Saç bezegi\n• Saçlary kesmek\n• Afro örümler\n• Akwaboýaglar\nElmydama ýaş we owadan görünmek isleýärsiňizmi? Onda özüňize ideg etmegi ýatdan çykarmañ. Köp sanly gowy synlar \"Mengli\"gözellik salonynyň ygtybarly ýerdigini görkezýär.\n@lala_cosmetology,+993 65 819579,+993 65 560201\nA.Niýazow köç. (Çehow), “Bereket” öýi",
                "address"=> "Ул. А. Ниязова (Чехова), дом “Bereket”",
                "instagram"=> "lala_kosmetolog",
                "phone"=> "+993 65 819579,+993 65 560201"
            ],
            [
                "name_tm"=> "Köpugurly hyzmat",
                "level"=> 5,
                "categories"=> "9",
                "description_rus"=> "Рекламное и полиграфическое агентство Köpugurly hyzmat- серебряный партнёр бизнес-журнала @barde.biz\nКак рассказать о себе и своём деле? Как привлечь себе новых клиентов?\nРеклама - один из самых результативных средств продвижения на рынке.\nПолиграфия помогает находить новых клиентов с помощью различной продукции=> визитки, листовки, открытки и др. \nРазличные блокноты, календари, сувениры, буклеты, бланки, папки с лого бренда помогают оставаться всегда на виду.\nТакие маленькие, но эффективные инструменты помогают продвинуть ваш бизнес.\nКомпанию выбирают за то, что она очень быстро выполняет заказы, радует качеством оказываемых услуг.",
                "description_tm"=> "Köpugurly mahabat we çap ediş agentligi - @barde.biz biznes źurnalynyň kümüş hyzmatdaşy\nÖz edýän işiñizi nädip tanatmaly? Täze müşderileri nädip çekmeli?\nMahabat. Bu bazardaky mahabatyň iň täsirli serişdeleriniñ biridir.\nÇap edilen wizit kartoçkalaryñ, listowkalaryñ otkrytkalaryñ we ş.m dürli önümleriň kömegi bilen täze müşderileri tapyp bilersiñiz.\nDürli depderçeler, senenamalar, ýadygärlik sowgatlary, kitapçalar, hatlar, marka nyşany bolan bukjalar hemişe gözüňizde durmaga kömek edýär.\nŞeýle kiçi, ýöne täsirli gurallar işiňizi ösdürmäge kömek edýär.\n Sargyt edilýàn işiñ Hyzmatlaryndan we hilinden hoşal bolýan müşderiler bu kärhanany saýlap alýarlar.,+993 64 924441\nkopugurly_hz@mail.ru\n Durdiýew Ý. Köç. 52-nji jaý, “Ak Enar”",
                "address"=> "Ул. Й. Дурдыев, здание 52, “Ak Enar”",
                "phone"=> "+993 64 924441",
                "email"=> "kopugurly_hz@mail.ru"
            ],
            [
                "name_tm"=> "Teri",
                "level"=> 5,
                "categories"=> "10",
                "description_rus"=> "Производитель консервированной продукции @terifood.official - серебряный партнёр бизнес-журнала @barde.biz\nВ суматохе повседневной жизни мы порой забываем про домашний быт.\n@terifood.official спешит к вам на помощь и сэкономит ваше драгоценное время.\n@terifood.official предоставляют вашему вниманию такую продукцию, как консервированные томаты, огурцы, компоты, соки, а также пряности.\nВсе мы любим пить чай с вкусняшками. Джемы от @terifood.official украсят ваш уютный вечер. \nВпереди нас ждут жаркие дни. Охлаждённые и сладкие компоты в такую пору утолят вашу жажду.\nС @terifood.official всё по-домашнему!",
                "description_tm"=> "Konserwirlenen azyk öndürijisi @terifood.official @barde.biz biznes źurnalynyň kümüş hyzmatdaşy\nGündelik durmuşyň başagaýlygynda biz käwagt öý işlerine elimiz degenok.\n@terifood.official siziň gymmatly wagtyňyzy tygşytlamak üçin niýetlenilen.\nÝangy siz @terifood.official kärhanasynda konserwirlenen pomidorlary, hyýarlary, kompot şireleri we ýakymly süýjilikleri tapyp bilersiñiz.\nBiziň hemmämiz lezzetli naharlar bilen çaý içmegi gowy görýäris. @Terifood.official-dan öndürilen süýjilikler siziň rahat agşamyňyzy bezärler.\nÖňümizde yssy günler ýetip gelýär. Şeýle döwürde sowadylan we süýji kompotlar suwsuzlygyňyzy kanagatlandyrar.\nEdil biziñ ene-mamalarymyzyñ elinden çykan ýaly datly tagamlar @terifood.official bilen!",
                "instagram"=> "terifood.official",
                "phone"=> "+993 64 637722"
            ],
            [
                "name_tm"=> "Trattoria smiles",
                "level"=> 5,
                "categories"=> "1",
                "description_rus"=> "Ресторан итальянской и азиатской кухни @restaurant.trattoria - серебряный партнёр бизнес-журнала @bardebiz.\nСуши- самое популярное блюда традиционной японской кухни. Именно самыми вкусными сушами и пиццами выделяется @restaurant.trattoria.\nПосетителей привлекают яркие интерьеры, прекрасная кухня и великолепные десерты. \nШеф-повары в совершенстве знают своё дело, умеют готовить домашнюю пасту и печь восхитительную пиццу. Какое бы блюдо вы ни выбрали - удовольствие гарантировано.\nИ наконец, итальянское вино. Это просто обязательная составляющая итальянской трапезы.\nСервис в ресторане идеален. Всё продумано до мелочей.\n@restaurant.trattoria предлагает своим клиентам уникальную атмосферу и только лучшие блюда.\nTrattoria & smile => “У нас вкусно….”",
                "description_tm"=> "Italýan we Aziýa tagamlaryñ restorany @ restoran.trattoria @bardebiz biznes źurnalynyň kümüş hyzmatdaşy.\nSuşi dünýäde iň meşhur ýapon naharydyr. @ Restoran.trattoria - da iň tagamly suşi we pizzalary taýynlanýar.\nNepis interýer, süýji aşhana we ajaýyp desertler bu ýere gelýänleri özüne çekýär.\nBu restoranyñ aşpezleri öz işini gowy bilýärler, tagamly makaronlary we lezzetli pizza bişirmegi bilýärler. Haýsy tagamy saýlasaňyz, lezzet kepillendirilýär.\n Italýan çakyry bolsa, italýan naharynyň möhüm bölegidir.\nRestoranyñ hyzmaty ýokary derejede. \n@ restoran.trattoria müşderilerine özboluşly atmosfera we iň oňat tagamlary hödürleýär.\nTrattoria & smile=> “Biz bilen tagamly ýaşa ….”",
                "instagram"=> "restaurant.trattoria",
                "phone"=> "+993 65 668723"
            ],
            [
                "name_tm"=> "Halal Hyzmat Merkezi",
                "level"=> 5,
                "categories"=> "9",
                "description_rus"=> "\nЦентр обслуживания “Halal Hyzmat Merkezi” -  серебряный партнёр бизнес-каталога @barde.biz\nУслуги, которые предоставляет центр “Halal”=>\n✅ Починка и обустраивание электродвигателей, трансформеров, генераторов\n✅  Установка и ремонт системы водоснабжения, кондиционеров и системы отопления\n✅ Постройка жилых и нежилых помещений \nПроверенные инженерные решения!",
                "description_tm"=> "“Halal Hyzmat Merkezi” @barde.biz biznes katalogynyň kümüş hyzmatdaşy\n“Halal Hyzmat Merkezi” tarapyndan hödürlenýän Hyzmatlar=>\nElektrik hereketlendirijilerini, transformatorlary, generatorlary abatlamak we enjamlaşdyrmak\nSuw üpjünçiligini, kondisioner we ýyladyş ulgamlaryny gurmak we abatlamak\nÝaşaýyş we ýaşaýyş däl jaýlaryň gurluşygy we taslama işlerini alyp barmak.\nYnamdar inźenerçilik çözgütleri!,+993 61 064729,977858\nhalalhyzmatmerkezi1@gmail.com",
                "phone"=> "+993 61 064729,977858",
                "email"=> "halalhyzmatmerkezi1@gmail.com"
            ],
            [
                "name_tm"=> "Art keshde",
                "level"=> 5,
                "categories"=> "4",
                "description_rus"=> "Творческое пространство @artstudio_keshde - серебряный партнёр бизнес-журнала @barde.biz\n@artstudio_keshde - территория вдохновения и творчества. \nВо всех странах мира принято гордиться своими национальными символами.\nВ студии у @designbysheker вы найдёте различные сумки, одежду, аксессуары, украшения с национальными орнаментами и элементами туркменской ручной вышивки.\nПроявлять любовь к своей стране можно по-разному.\nПростая, стильная одежда с национальной символикой станет отличным способом выразить свою приверженность к Родине!\n@artstudio_keshde - это \n⚜️национальность воплощённая в современную моду \n⚜️ авторский дизайн\n⚜️ новая индустрия национальной одежды",
                "description_tm"=> "Döredijilik merkezi @artstudio_keshde - @barde.biz biznes źurnalynyň kümüş hyzmatdaşy \n@artstudio_keshde - ylhamyň we döredijiligiň mekanydyr.\nDünýäniň ähli ýurtlarynda milli sungata buýsanmak adaty zatlaryñ biridir.\n@Designbysheker studiýasynda siz öz islegiñize görä dürli el torbalary, eşikleri, el keşdeler bilen bezelen esbaplary, milli bezegli şaý-sepleri tapyp bilersiňiz.\n Ýaşaýan ýurduñyza öz söýgiñizi görkezmegiň köp usuly bar.\nMilli nyşanly ajaýyp eşikler bilen halk köpçüligi begendirmek öz Watanyñyza bolan söýgiñizi görkezmegiň ajaýyp usuly bolar!\n@artstudio_keshde\n⚜️ Döwrepaplaşdyrylan milli eşikleriň milleti häzirki zaman modasynda öz beýanyny tapdy\n⚜️ Awtor işleri\n⚜️ Milli eşikleriň täze pudagy   "
            ],
            [
                "name_tm"=> "Nara kids",
                "level"=> 5,
                "categories"=> "4",
                "description_rus"=> "Бренд детской одежды @nara_kids_boutique - серебряный партнёр бизнес-журнала @barde.biz\nКачественнная и стильная детская одежда в @nara_kids_boutique рассчитана на детей от 0 до 15 лет. Огромный ассортимент включает большое количество разнообразных моделей по цвету и фасонов=> бодики, джемпера, комбинезоны, платья, распашонки, футболки, майки, ползунки, чепчики, штанишки и т.п.\nОдежда не сковывает движения, позволяя малышам свободно передвигаться, играться, ползать, бегать.\nВ @nara_kids_boutique регулярно поступают яркие обновления одежды на каждый сезон. Новые коллекции одежды позволят вашим малышам всегда выглядеть модно. Высокое качество материалов обеспечит удобство и долговечность в использовании.\nТакже имеется доставка.\nОдевайте своих детей в @nara_kids_boutique !",
                "description_tm"=> "Çagalaryň egin-eşik markasy @nara_kids_boutique @ barde.biz biznes źurnalynyň kümüş hyzmatdaşy\n@Nara_kids_boutique 0-15 ýaş aralygyndaky çagalaryna ýokary hilli we ajaýyp çaga eşiklerini hödürleýär. Siz bu butikde çaga eşikleriñ uly görnüşlerini, reňk we stil boýunça köp sanly dürli modelleri tapyp bilersiñiz=> kostýumlar, bökjekler, geýimler, köýnekler, aşaky köýnekler, futbolkalar, şapkalar, balak we ş.m.\nEgin-eşikler hereketlere päsgel bermeýär, bäbekleriň erkin hereket etmegine, oýnamagyna, süýrenmegine, ylgamagyna mümkinçilik berýär.\n@nara_kids_boutique her möwsümi üçin ajaýyp täze eşikler toplumyny yzygiderli çalşyp durýar. Täze egin-eşik kolleksiýalary çagalaryňyza elmydama owadan görünmäge mümkinçilik berer. Eşikleriñ yokary hili bolsa rahatlygy we berkligi üpjün edýär.\nEltip bermek hyzmaty hem bar.\nÇagalaryňyzy @nara_kids_boutique-de geýiň!\n@nara_kids_boutique,+993 65 724636,+993 63 724554\n “Aşgabat” söwdä merkezi.",
                "address"=> "ТРЦ “Aşgabat”",
                "instagram"=> "nara_kids_boutique",
                "phone"=> "+993 65 724636,+993 63 724554"
            ],
            [
                "name_tm"=> "Ýaşyl dünýa",
                "level"=> 5,
                "categories"=> "9",
                "description_rus"=> "Магазины флористики, подарков и комнатных растений @yashyldunya_flowers - серебряный партнёр бизнес-журнала @barde.biz\nХотите сразить девушку наповал? Обрадовать своих близких, сделав им приятный подарок? Проявить уважение к руководству или любовь к близкому человеку? @yashyldunya_flowers предлагают вашему вниманию прелестные букеты. Здесь вы найдёте отличные идеи. А если вы хотите чего-то уникального, то @yashyldunya_flowers создадут неповторимую композицию именно для вас.\nВ наличии всегда имеется большой выбор свежесрезанных цветов.\nДля постоянных и корпоративных клиентов действует дисконтная система скидок!",
                "description_tm"=> "Flora bezeg we öý gülleri, dürli görnüşindäki sowgatlar dükany @yashyldunya_flowers - @barde.biz biznes źurnalynyň kümüş hyzmatdaşy \nSiz öz söýgüliñizde täsir galdyrmak isleýärsiňizmi? Öz ýakynlaryñyza gowy sowgat berip, göwünlerini götermek isleýärsiňizmi? Işleýän ýeriñizdäki ýolbaşçylara hormat goýmak ýa-da ýakyn adamyňyza öz söýgiñizi beýan etmegi isleýän bolsañyz, onda @yashyldunya_ güller size ajaýyp buketleri hödürleýär. Bu ýerde siziň iñ ynjyk islegleriňiz kanagatlandyrylar. Üýtgeşik bir zat isleseňiz, @yashyldunya_flowers diňe siziň üçin özboluşly kompozisiýa döredip berer.\nElmydama ätiýaçda täze kesilen gülleriň köp görnüşi bar.\nAdaty we korporatiw müşderiler üçin arzanladyş ulgamy bar!\nBezeg gülleriñ we sowgatlyklaryñ dükany\nMagtymguly şaýoly, 124,+993 12 361122\n723344\nÖý gülleriñ dükany\n 📍Görogly köçesi 6 (Şewçenko),+993 12 269897\n724433\n@yashyldunya_güller\ninfo@yashyldunya.ru",
                "address"=> "Магазин флористики и подарков \n📍Махтумкули шаёлы, 124Магазин комнатных растений\n📍ул. Гёроглы, 6 (Шевченко)",
                "instagram"=> "yashyldunya_flowers",
                "phone"=> "+993 12 361122,723344,+993 12 269897,724433",
                "email"=> "info@yashyldunya.ru "
            ],
            [
                "name_tm"=> "Lanna",
                "level"=> 5,
                "categories"=> "2",
                "description_rus"=> "Десерты ручной работы @lanna_sweets.tm - серебряный партнёр бизнес-каталога @barde.biz\nНи одно праздничное мероприятие не обходится без вкусного торта. Из обычного продукта питания он превратился в яркий элемент украшения торжества.\nПри приготовлении тортов и десертов @lanna_sweets.tm использует только натуральные, качественные и свежие продукты, вкус и внешний вид которых не оставит равнодушным \nДесерты от @lanna_sweets.tm это=>\n🌸 украшение праздничного стола\n🌸 часть праздника \n🌸 отличный подарок\n🌸 душевное чаепитие\nКаждый десерт создан специально для вас из самых свежих ингредиентов.\nВкусно и красиво!",
                "description_tm"=> "Elde bişirilen süýjilikler @lanna_sweets.tm - \n@barde.biz biznes katalogynyň kümüş hyzmatdaşy\nHiç bir baýramçylyk çäresi tagamly tort bolmasa gyzykly geçmeýär. Tort adaty iýmit önüminden, baýramçylyk bezeginiň ajaýyp nusgasyna öwrüldi.\nTortlar we desertler taýýarlanylanda \n@lanna_sweets.tm diňe tebigy, ýokary hilli we täze önümleri ulanylýar.\n@Lanna_sweets.tm-den desertler=>\n🌸 Dynç alyş stolunyň bezegi\n🌸 Baÿramçylygyñ bir bölegi\n🌸 Ajaýyp sowgatlar\n🌸 Mylaýym çaý başyndaky gürrüñler\nHer bir taýýarlanylan süýjilikler ýörite siz üçin aýratyn önümlerinde taýÿarlanylýar.\nLezzetli we owadan!\n@lanna_sweets.tm\nAşgabat şäheri,+993 65 877988",
                "instagram"=> "lanna_sweets.tm",
                "phone"=> "+993 65 877988"
            ],
            [
                "name_tm"=> "Kinza",
                "level"=> 5,
                "categories"=> "1",
                "description_rus"=> "Кафе & бар @kinza_tm - серебряный партнёр бизнес-каталога @barde.biz\n@kinza_tm - это место, где царит уютная атмосфера, а профессиональные повара готовят изумительно вкусные блюда. \n@kinza_tm подарят вам только позитивные эмоции и отличное настроение, оставят приятные впечатления и воспоминания.\nОфицианты гостеприимны, вежливы и тактичны, обслуживают по высшему разряду. \nВеликолепная кухня, прекрасный интерьер и высокое качество сделают ваш вечер запоминающимся.\nЕсли вы не хотите покидать свой дом и тратить на приготовление еды своё драгоценное время , то вы можете заказать еду с доставкой до двери.\nОкунитесь в атмосферу превосходной еды и прохладных напитков!\nДобро пожаловать в @kinza_tm!",
                "description_tm"=> "Kafe we ​bar @kinza_tm - @barde.biz biznes kitapçasynyñ kümüş hyzmatdaşy\n@kinza_tm mylaýym daşky gurşawy we ökde hünärmen aşpezleriñ ajaýyp tagamly naharlaryñ taýýarlaýan ýeri.\n@kinza_tm size diňe oňyn we ajaýyp şadyýan duýgulary bilen gurşap, ýakymly täsirleri we ýatlamalary galdyrar.\nBu kafenyñ myhmansöýer, mylakatly we sypaýy işgärleri size iň ýokary derejede hyzmat ederler.\nAjaýyp we tagamly naharlar siziň agşamyñyzy bezär.\nIýmit taýýarlamak islemeýän bolsaňyz, gymmatly wagtyňyzy aýawly saklap iýmitleri sargyt edip bilersiňiz. Olar tiz wagtda siziň gapyñyza ýetiriler.\nAjaýyp iýmitleriñ we salkyn içgileriñ atmosferasyna çümüň!\n@Kinza_tm-a hoş geldiňiz!\n@kinza_tm,+993 64 516707,942848\n📍Magtymguly şaýoly, 73, \"Türkmenistan\"söwda merkezi, 1-nji gat\nhttps=>\/\/dostawka.bar\/all\/kinza",
                "address"=> "📍проспект Махтумкули, 73, ТЦ “Türkmenistan”, 1 этаж",
                "instagram"=> "kinza_tm",
                "phone"=> "+993 64 516707,942848",
                "website"=> "dostawka.bar/all/kinza"
            ],
            [
                "name_tm"=> "Guller décor",
                "level"=> 5,
                "categories"=> "9",
                "description_rus"=> "Организация и оформление праздничных мероприятий @gullerdecor - серебряный партнёр бизнес-каталога @barde.biz\nНи один праздник не обходится без оформления. Праздничный декор задает тон всему мероприятию, создаёт атмосферу праздника и настраивает на отдых.\nКоманда @gullerdecor занимается профессиональным оформлением мероприятий любого масштаба и тематики. Главное - заявить о себе. Любое событие=> деловое, личное или относящееся к сфере развлечений, нуждается в правильно подобранном оформлении. Оформление мероприятий не составит труда для профессионалов.\nКреативные конструкции из шаров, декорации, печатная продукция, ткани - всё это создаст нужное настроение вам и вашим гостям. Вы непременно окунётесь в атмосферу веселья и радости.\nДоверьте свой праздник настоящим профессионалам! ",
                "description_tm"=> "Baýramçylyk çärelerini guramak we bezemek @gullerdecor - @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nHiç bir baýramçylyk çäresi bezegsiz göz öñüne getirmek bolmaýar. Baýramçylyk bezegi geçirilýän çäräniň äheňini düzýär, baýramçylyk duýgusyny döredýär we dynç almak üçin sizi taýýarlaýar.\n@Gullerdecor topary islendik göwrümdäki we islendik kynçylykda bezegleri ýokary derejede siziň hyzmatyňyza hödürleýär. Esasy zat özüňi beýan etmekdir. Wakalaryñ islendik görnüşleri=> iş, şahsy ýa-da güýmenje bilen baglanyşykly çäreler dogry dizaýna mätäçdir. \nŞarlardan, bezeglerden, çap edilen materiallardan, matalardan döredijilik dizaýnlary - bularyň hemmesi size we myhmanlaryňyzy begendirer. Elbetde siz gyzykly we şatlykly atmosfera çümersiñiz!!!\nBaýramyňyzy hakyky hünärmenlere ynanyň!\n@gullerdecor,+99365397227\n",
                "instagram"=> "gullerdecor",
                "phone"=> "+9936539722"
            ],
            [
                "name_tm"=> "Ramilya",
                "level"=> 5,
                "categories"=> "5",
                "description_rus"=> "Профессиональный визажист @ramazanova.ramilya - серебряный партнёр бизнес-каталога @barde.biz\nНи для кого не секрет, что ухоженный внешний вид не просто повышает настроение, но и привлекает внимание окружающих. И чтобы выглядеть \"на все сто\", очень важно правильно нанести макияж.\n@ramazanova.ramilya поможет вам создать неповторимый макияж для торжественных мероприятий, деловых встреч, фотосессий.\nОна подберёт цветовую палитру для каждого типа кожи, скроет мимические морщинки и подчеркнёт вашу природную красоту. Рамиля знает все тонкости работы с кожей, цветотипом клиента, правильность подбора цветного макияжа.\nБлагодаря своими навыками и умениями в искусстве макияжа @ramazanova.ramilya заняла призовое место в номинации «Подиумный, вечерний и свадебный макияж» в Чемпионате по парикмахерскому искусству и декоративной косметике.",
                "description_tm"=> "Professional makiýaź ediji @ramazanova.ramilya @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nOwadan durkuñ adamlara başgaça täsir galdyrýanlygy hiç kim üçin syr däl. Haçanda gyz-gelinler özüni timarlanda başgalaryň ünsüni özüne çekýändigi hem syr däl. Owadan görünmek üçin makiýaźy dogry ulanmak gaty möhümdir.\n@ramazanova.ramilya aýratyn çäreler, iş duşuşyklary, surata düşmek üçin özboluşly makiýaź döretmäge kömek eder.\nHer deriniň görnüşi üçin reňk palitrasyny saýlar, deriniñ näsazlyklaryny gizlär we tebigy gözelligiňizi açyp görkezer. Ramilýa deri bilen işlemegiň ähli inçeliklerini, müşderiniň reňk görnüşini, reňkli makiýaźy dogry saýlamagy bilýär.\nMakiýaź sungatynda başarnyklary üçin @ramazanova.ramilya \"Saç kesmek we saçlary boýamak\"çempionatynda \"Agşamky we toý makiýaź\"kategoriýasynda baýrak aldy.\n@ramazanova.ramilya,+993 64042084\nramazanova.ramilya12@gmail.com",
                "instagram"=> "ramazanova.ramilya",
                "phone"=> "+99364042084",
                "email"=> "ramazanova.ramilya12@gmail.com"
            ],
            [
                "name_tm"=> "Institut Francais",
                "level"=> 5,
                "categories"=> "9",
                "description_rus"=> "Французский институт в Туркменистане - серебряный партнёр бизнес-каталога @barde.biz\nФранцузский язык - официальный язык Франции, язык французов, франкоязычного населения Бельгии, Швейцарии, Канады ( в которых является одним из официальных). Относится к индоевропейской семье языков - романская группа, галло-романская  подгруппа)\n \nОдин из 6 официальных и рабочих языков ООН. \nФранцузский язык - официальный язык большого числа международных организаций и одним из самых изучаемых в качестве иностранного.\nФранцузский институт в Туркменистане является учреждением Министерства Европы и иностранных дел Французской республики, имеющим междисциплинарное призвание и ведущим деятельность по распространению французского языка и сотрудничеству в культурной и языковой сферах.\nОсновные задачи=>\n✔️ преподавание французского языка\n✔️информирование общественности о современной Франции \n✔️организация мероприятий, представляющих французскую культуру во всех её формах местному населению",
                "description_tm"=> "Türkmenistandaky Fransuz instituty @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nFransuz dili Fransiýanyň resmi dili, fransuzlaryň dili, Belgiýanyň, Şweýsariýanyň, Kanadanyň fransuz dilli ilaty üçin (bu ýerde resmi dilleriň biri hasaplanýar). Hindi-Ýewropa diller maşgalasyna degişlidir - Roman topary, Gallo-Romance kiçi topary)\nBMG-nyň 6 resmi dilleriñ arasynda esasy dilleriñ biri hasaplanýar.\nFransuz dili köp sanly halkara guramasynyň resmi dili we daşary ýurt dili hökmünde iň köp öwrenilenleriň biridir.\nTürkmenistandaky Fransuz instituty, dersara hünäri bolan we fransuz dilini ýaýratmak we medeni we dil ugurlary boýunça hyzmatdaşlygy amala aşyrýan Ýewropa ministrliginiň we Fransiýa Respublikasynyň Daşary işler ministrliginiň edarasydyr\nEsasy meseleler=>\n✓ Fransuz dilini öwretmek\n✓ Häzirki zaman Fransiýa barada halka maglumat bermek\n ýerli ilata fransuz medeniýetini ähli görnüşlerde hödürleýän çäreleri guramak\nTürkmenistandaky Fransuz instituty\nAga Garryýewa köç, 69 öý (Sokolowskiý),+993 12 368370\/ 71\/ 72\ntm.ambafrance.org",
                "address"=> "Французский Институт в Туркменистане ул. Ага Гаррыева д.69 (Соколовского)",
                "phone"=> "+993 12 368370",
                "email"=> "tm.ambafrance.org"
            ],
            [
                "name_tm"=> "Boy Bodron",
                "level"=> 5,
                "categories"=> "6",
                "description_rus"=> "Аптека @boy_bodron - серебряный партнёр бизнес-каталога @barde.biz\nАптека @boy_bodron - это организация системы здравоохранения, которая занимается изготовлением, фасовкой, анализом и, разумеется, продажей лекарственных препаратов.\nЗдесь вы найдёте=>\n🟢 Лекарственные средства\n🟢 Средства личной гигиены\n🟢 Изделия медицинского назначения\n🟢 Косметика, средства по уходу\nДоставка лекарств в лечебно-профилактические учреждения и инвалидам осуществляется бесплатно!\nСлужба доставки работает без выходных с 09=>00 до 21=>00.\nОплата осуществляется путём наличного и безналичного расчёта. А также предусматриваются скидочные карты 3% и 5%.",
                "description_tm"=> "Dermanhana @boy_bodron - @barde.biz biznes katalogynyň kümüş hyzmatdaşy\n@Boy_bodron dermanhanasy derman öndürýän, gaplaýan, seljerme edýän we elbetde derman satýan saglygy goraýyş guramasydyr.\nSiz bu ýerde şulary tapyp bilersiňiz=>\n  🟩 Dermanlar\n  🟩Şahsy ideg önümleri\n  🟩 Lukmançylyk enjamlary\n  🟩Kosmetika we ideg önümleri\nLukmançylyk edaralaryna we maýyplara dermanlary eltip bermek hyzmaty mugt!\nEltip bermek hyzmaty hepdede ýedi gün ýagny sagat 09=>00-dan 21=>00-a çenli işleýär.\nTöleg nagt we nagt däl töleg görnüşinde amala aşyrylýar. Şeýle hem 3% we 5% arzanladyş kartlary berilýär.\n@boy_bodron,908-908; 90-67-67,908-809; 97-03-03,90-64-65,+993 62 337878,+993 62 347878\nGörogly köçesi, 122, “Aşgabat Ýalkymy” söwda merkezi, 1-nji gat",
                "address"=> "Ул. Героглы, 122, ТЦ “Aşgabadyň Ýalkymy”, 1 этаж",
                "instagram"=> "boy_bodron",
                "phone"=> "+993 62 337878,+993 62 347878"
            ],
            [
                "name_tm"=> "Ussat Birleşik",
                "level"=> 5,
                "categories"=> "8",
                "description_rus"=> "Логистическая компания @ussat_birleshik - серебряный партнёр бизнес-каталога @barde.biz\nЛогистическая компания @ussat_birleshik    предоставляет вашему вниманию  транспортно - экспедиторские услуги.\nТранспортно-экспедиторская услуга - это работа, связанная с организацией и обеспечением перевозок экспортного, импортного, транзитного или иного груза по договору транспортного экспедирования.\n@ussat_birleshik гарантирует быстрые сроки доставки, оптимальный маршрут перевозок и сохранность груза.\nОни предлагают своим клиентам следующие виды услуг=>\n- перевозки стандартных грузов;\n- перевозки объемных грузов; \n- перевозка негабаритных и тяжеловесных грузов;\n- перевозки сборных и малогабаритных грузов;\n- морские перевозки.\n- авиадоставка.\nБыстро, надёжно и качественно - это про @ussat_birleshik!",
                "description_tm"=> "8 kompaniýasy @ussat_birleshik @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nLogistika kompaniýasy @ussat_birleshik size ulag we ugradyş Hyzmatlaryny hödürleýär. Ekspeditorçylyk hyzmaty, eksport, import, tranzit ýa-da beýleki ýükleri transport ugratmak, şertnamasy boýunça guramak we üpjün etmek bilen baglanyşykly işleri öz içine alýar.\n@ussat_birleshik tiz wagtda eltip bermek, amatly transport ýoluny we ýük howpsuzlygyny kepillendirýär.\nMüşderilerine şu aşakdaky Hyzmatlary hödürleýärler=>\n- adaty ýükleri daşamak;\n- uly göwrümdäki ýükleri daşamak;\n- has uly göwrümdäki agyr ýükleri daşamak;\n- toparlaýyn we kiçi göwrümli ýükleri daşamak;\n- deñiz üstaşar ýükleri ýollamak\n- awia eltip bermek\nÇalt, ygtybarly we ýokary hilli - bu @ussat_birleshik hakynda!,+993 65 715224,+993 65 623335,+993 61 874669\nhari.birleshik19@mail.ru\nussatbirleshik.com.tm\nTürkmenistanyň gahrymany Atamyrat Niýazowyň şaýoly, 174 (blok 2\/105)",
                "address"=> "Проспект героя Туркменистана Атамурата Ниязова, 174 (блок 2 \/ 105)",
                "phone"=> "+993 65 715224,+993 65 623335,+993 61 874669",
                "email"=> "ussat.birleshik19@mail.ru",
                "website" => "ussatbirleshik.com.tm"
            ],
            [
                "name_tm"=> "4nal",
                "level"=> 5,
                "categories"=> "15",
                "description_rus"=> "Магазин автомобильных шин, моторных масел, аккумуляторов @4nal_official - серебряный партнёр бизнес-каталога @barde.biz\n@4nal_official предлагают вам большой выбор автомобильных шин, моторных масел и аккумуляторов. Только у них вы можете приобрести товары в рассрочку на 6 месяцев без первоначального взноса.\nОни придерживаются строгих требований к качеству предлагаемых товаров. К каждому клиенту предусмотрен индивидуальный подход.\nСпециалисты помогут быстро подобрать и определиться с покупкой шины или аккумуляторной батареи. При возникновении вопросов вы можете обратиться за консультацией.\nОгромный выбор шин в магазине @4nal_official позволяют вам приобрести различные шины в соответствии с вашими требованиями, учитывая стиль езды и ваши предпочтения.\nПриобретая товар здесь, вы будете уверены в качестве продукта, а значит в завтрашнем дне.\nТвой вечный двигатель.",
                "description_tm"=> "15ulag tekerleriniň, motor ýaglarynyň we batareýalaryň dükany @4nal_official - @barde.biz biznes katalogynyň kümüş hyzmatdaşy \n@4nal_official size Awtoulag tekerleriniň, motor ýaglarynyň we batareýalaryň köp görnüşini hödürleýär. Diňe olardan harytlary tölegsiz 6 aý möhlet bilen bölekleýin satyn alyp bilersiňiz.\nHödürlenýän önümleriň hili üçin berk talaplary berjaý edýärler. Her bir müşderiniñ iñ ynjyk çylşyrymly meselelerine aýratyn çemeleşmesi bar.\nHünärmenler teker ýa-da batareýa satyn almak barada çalt saýlamaga we karar bermäge kömek eder. Soraglaryňyz bar bolsa, maslahat sorap bilersiňiz.\n@4nal_official tekerleriň ägirt uly görnüşi, sürüş stiliňize we islegleriňize görä dürli tekerleri talaplaryňyza görä satyn almaga mümkinçilik berýär.\nBu ýerde haryt satyn almak bilen, ertiriňize ynamly bolup bilersiñiz. \nHemişelik hereket enjamyňyz.\n@4nal_official\nDosaf, Awtoulag duralgasynyň 1-nji gaty, 121 we 130-njy dükanlar,+993 64 046318,+993 12 227836,+993 64 047553\nbrandshop.tm",
                "address"=> "Проезд Досааф, 1 этаж автостоянки, магазины 121 и 130",
                "instagram"=> "4nal_official",
                "phone"=> "+993 64 046318,+993 12 227836,+993 64 047553",
                "website"=> "brandshop.tm "
            ],
            [
                "name_tm"=> "Hekem",
                "level"=> 5,
                "categories"=> "9",
                "description_rus"=> "Группа предприятий @hekem_hk - серебряный партнёр бизнес-каталога @barde.biz\nГруппа предприятий «Хекем» - это индивидуальные предприятия «Хекем», «Адыл Хекем» и «Хекем Аудит», которые берут своё начало с 2012 года\nГруппа предприятий «Хекем» окажут Вам=>\n🔹Аудиторские\n🔹Оценочные\n🔹Переводческие\n🔹Риэлторские и связанные с ними\n🔹 Юридические услуги\n@hekem_hk проводит аудит финансово-хозяйственной деятельности предприятий, оказывает услуги, связанные с приобретением и отчуждением права собственности на недвижимое имущество, оценку движимого и недвижимого имущества, переводит документы любой сложности, одновременно оказывая юридические услуги по вопросам, возникающие в процессе выполнений их поручений.",
                "description_tm"=> "“Hekem” HK kompaniýalar topary, @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nHekem kärhanalar topary 2012-nji ýyldan bäri döredilen Hekem, Adyl Hekem we Hekem Audit aýratyn kärhanalarynyñ toplumydyr.\n\"Hekem\"kompaniýalar topary size=>\n• Auditor\n• Baha bermek\n• Terjime etmek\n• Rieltorçylyk we gozgalmaýan emläk we oňa degişli işleri\n• Hukuk Hyzmatlary\n@hekem_hk kärhanalaryň maliýe we ykdysady işlerine gözegçilik edip, gozgalmaýan emläge eýeçilik hukugyny edinmek, gozgalmaýan emläge baha bermek bilen baglanyşykly Hyzmatlary hödürleýärler, şol bir wagtyň özünde ýüze çykýan meseleler boýunça hukuk Hyzmatlaryny ýerine ýetirip görkezmelerini ýerine ýetirmek işleri hem öz içine alýar.\n@hekem_hk,+993 12 478115,+993 64 024820\n10 ýyl Abadançlyk köçesi, 98\nblbatya59@inbox.ru",
                "address"=> "Ул. 10 йыл Абаданчылык, 98",
                "instagram"=> "hekem_hk",
                "phone"=> "+993 12 478115,+993 64 024820",
                "email"=> "blbatya59@inbox.ru"
            ],
            [
                "name_tm"=> "Deluxe aroma",
                "level"=> 5,
                "categories"=> "5",
                "description_rus"=> "Магазин разливного парфюма @deluxe__aroma__tm - серебряный партнёр бизнес-каталога @barde.biz\nВ магазине @deluxe__aroma__tm представлен большой ассортимент масляных духов.\nМасляные духи - это уникальный вид парфюмерии со сложным составом. Отличительная особенность масляных духов - это их основа, которая состоит из эфирных масел.\nОдним из удивительных качеств подобных духов является их проявление в моменты движения или состояния покоя.\nАромат медленно замирает во время покоя, его звучание становится приглушённым, а затем едва уловимым. Стоит лишь добавить активность, как запах вновь заиграет яркими нотами.\nРазливной парфюм нравится покупателям невысокой стоимостью в сочетании с большим ассортиментом \nВыбери свой запах!",
                "description_tm"=> "Parfýumeriýa dükany @deluxearomatm @barde.biz biznes katalogynyň kümüş hyzmatdaşydyr\n@Deluxearomatm dükanynda köp mukdarda ýagly atyrlary saýlap görüp bilersiñiz!\nÝagly atyrlar çylşyrymly düzümi bolan parfýumeriýanyň özboluşly görnüşidir. Ýagly atyrlarynyň tapawutly aýratynlygy, efir ýaglaryndan ybarat bolmagydyr.\nParfumyñ ysy ýuwaş-ýuwaşdan teniñize siñip onuñ ysy ilki bilen siziň beýniñize ýetip teniñizi nepis ysy bilen gurşap alýar. \nÝagly atyrlar özüniñ ýiti ysy we amatly bahalary bilen alyjylaryñ söýgüsini gazandy.\nÖz ysyňyzy saýlaň!\n@deluxearomatm,+993 61 060666\n( Garaşsyzlygyñ 15-ýyllygy bazary, SM)",
                "address"=> "Оптовый рынок (“15 ýyl Garaşsyzlyk” SM)",
                "instagram"=> "deluxe__aroma__tm",
                "phone"=> "+993 61 060666"
            ],
            [
                "name_tm"=> "Ak Tam info",
                "level"=> 5,
                "categories"=> "9",
                "description_rus"=> "Строительный центр «АК ТАМ» - серебряный партнёр бизнес-каталога @barde.biz\n«AK TAM» - надёжный поставщик материалов для строительства и ремонта. Это позволяет вам приобрести самый широкий ассортимент различных строительных материалов и других параллельных материалов.\n«АК ТАМ» включает в себя свыше 60 000 товаров в одном месте по доступным ценам=>\n🟡 Строительные смеси\n🔵 Лакокрасочные материалы\n🟡 Инженерная сантехника\n🔵 Электротовары\n🟡 Строительные материалы\nТакже предлагаем вам в аренду помещения с юридическим адресом под=>\n🔵 Магазины\n🟡 Офисы\n🔵 Склады\n🟡 Столовые помещения\n🔵 Производственный цех",
                "description_tm"=> "\"AK TAM\"12 merkezi - @barde.biz biznes katalogynyň kümüş hyzmatdaşy\n\"AK TAM\"12 we abatlaýyş materiallaryny ygtybarly üpjün ediji. Bu size dürli gurluşyk materiallarynyň we beýleki parallel materiallaryň iň giň gerimini satyn almaga mümkinçilik berýär.\n\"AK TAM\"60,000-den gowrak önümi elýeterli bahalarda bir ýerde jemläp siziň hyzmatyňyza hödürleýär. \n 🔷 Gurluşyk garyndylary\n 🔷 Boýag we lak materiallary\n 🔷 Injenerçilik tehniki enjamlary\n 🔷Elektrik önümleri\n 🔷Gurluşyk materiallary\nŞeýle hem, ýuridiki salgysy bolan jaýlary kärendesine almagy teklip edýäris=>\n🟣Dükanlar\n🟣Içgi Ofisler\n🟣Ammarlar\n🟣 Naharhanalar\n🟣 Önümçilik sehler\nMaglumat üçin telefon belgiler=>,+993 65 176295",
                "phone"=> "+993 65 176295"
            ],
            [
                "name_tm"=> "Myrat molla",
                "level"=> 5,
                "categories"=> "9",
                "description_rus"=> "Самый первый вайнер в Туркменистане @myratmolla - серебряный партнёр бизнес-каталога @barde.biz\nНесомненно все знают нашего знаменитого @myratmolla. Мурат Молла очень разносторонняя и многопрофильная личность. Он является=>\n✔️ Артистом\n✔️ Актёром\n✔️ Певцом\n✔️ Шоуменом\n✔️ Блогером\nОн знает как правильно пользоваться своей популярностью для усиления узнаваемости вашего дела. Благодаря качественному и интересному контенту, реклама в формате вайна поможет вам повысить известность вашего бренда.\nУ него более 1000 юмористических вайнов, которые поднимут не только настроение, но и ещё научат вас легко относиться к жизни\nСоздайте свой бизнес, а команда @myratmolla прославит его N 1 в своём деле!",
                "description_tm"=> "Türkmenistanda ilkinji waýnerçy @myratmolla @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nMeşhur @myratmolla-ny şübhesiz hemmeler tanaýar. Myrat Molla gaty köp taraply we köp ugurly şahsyýet. Ol=>\n✔️ Artist\n✔️ Aktýor\n✔️ Aýdymçy\n✔️ Şowmen\n✔️ Blogger\nIşiňiziň tanalmagyny ýokarlandyrmak üçin meşhurlygyny nädip dogry ulanmalydygyny bilýän artist. Hil we özüne çekiji mazmun bilen döredilen waýn siziň brendiñiziñ tanalmagyny kömek berer.\nOnuň 1000-den gowrak gülkünç waýnlary bar, bu sizi diňe bir begendirmän, eýsem durmuşa ýeñillik bilen garamagy öwreder.\nÖz brendiñizi dörediň, @myratmolla we onuñ topary bolsa ony halka tanadar!",
                "instagram"=> "myratmolla",
                "phone"=> "+993 63 784999",
                "website"=> "myratmolla.com"
            ],
            [
                "name_tm"=> "Zemm home",
                "level"=> 5,
                "categories"=> "11",
                "description_rus"=> "Мебельный магазин @zemmhometm - серебряный партнёр бизнес-каталога @barde.biz\n@zemmhometm - это интернет-магазин и шоу-рум эксклюзивных товаров для дома высокого качества. Вас ждёт широкий ассортимент мебели, ковров, посуды, осветительных приборов, текстиля и аксессуаров для домашнего декора в современном стиле элитных европейских брендов.\n@zemmhometm представляют вашему вниманию широкий ассортимент дизайнерской мебели премиум-класса из натуральной древесины с функциональной фурнитурой и несложным механизмом трансформации.\n🔸 Посуда\n🔸 Ковры и коврики\n🔸 Декор\n🔸 Домашний текстиль\n🔸 Освещение\nВы сможете подобрать товары самых разных стилей – от классической мебели до урбана, в зависимости от ваших предпочтений. Богатая палитра оттенков, огромная вариативность и эргономичность позволят вам создать свой неповторимый интерьер.\nВсё для создания уюта в вашем доме!",
                "description_tm"=> "Mebel dükany @zemmhometm @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nOnlaýn dükan @zemmhometm, ýokary hilli öý önümleri size hödürleýär. Siz bu ýerde ýewropanyň saýlama markalarynyň häzirki zaman stilinde köp sanly mebel, haly, saçak üçin gap-gaçlary, yşyklandyryş, dokma we öý bezeg esbaplaryny tapyp bilersiňiz.\n@zemmhometm, işleýiş enjamlary we ýönekeý üýtgeşme mehanizmi bilen tebigy agaçdan ýasalan premium dizaýner mebelleriniň giň toplumyny ünsüňize hödürleýär.\n🔸 gap-gaç önümleri\n🔸 Halylar we halçylar\n🔸 Bezeg esbaplary\n🔸 Dokma öý önümleri\n🔸 Yşyklandyryş\nSiz öz islegleriňize görä dürli görnüşdäki önümleri - nusgawy mebellerden adaty öý esbaplaryna çenli dürli zatlary satyn alyp bilersiňiz. \nÖýüňizde rahatlyk döretmek üçin hemme zat bar!",
                "address"=> "Ахалский велаят, город Анау, ул. Ахал, 27\/1 дом.",
                "instagram"=> "zemmhometm",
                "phone"=> "+993 65 501034,+993 62 622685,+993 137 45-5-42",
                "email"=> "info@zemmhome.com",
                "website" => "zemmhome.com"
            ],
            [
                "name_tm"=> "Bahar beauty",
                "level"=> 5,
                "categories"=> "5",
                "description_rus"=> "Магазин парфюмерии, декоративной и уходовой косметики @baharbeauty.tm- серебряный партнёр бизнес-каталога @barde.biz\n \nЕсли вы любите косметику, то вы попали точно по адресу!\nВ магазине @baharbeauty.tm вы можете приобрести косметику для женщин и мужчин зарубежных брендов. Абсолютно любой желающий может купить парфюмерию, ухаживающую продукцию для лица и тела, средства для ухода волос, декоративную косметику, мужские средства по уходу за лицом, телом, волосами. \n Почему стоит выбрать @baharbeauty.tm?\n💄Огромный ассортимент парфюма\n💄 Профессиональная косметика\n💄 Демократичные цены\nБудьте всегда на высоте с @baharbeauty.tm !",
                "description_tm"=> "Parfýumeriýa, bezeg we kosmetika dükany @baharbeauty.tm - @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nEger-de siz kosmetikany gowy görýän bolsaňyz, onda siz gerekli ýere geldiňiz!\n@Baharbeauty.tm dükanynda daşary ýurt markalaryndaky gyz-gelinler we ýigitler üçin kosmetika we beýleki önümleri satyn alyp bilersiňiz. Her kim atyr, ýüz we beden ideg üçin önümleri, saçlara ideg berýän önümleri, kosmetika serişdeleri satyn alyp biler.\n Näme üçin @baharbeauty.tm saýlamaly?\n💄 Parfýumeriýanyň uly görnüşleri\n💄 Professional kosmetika\n💄 Amatly bahalar\nElmydama @baharbeauty.tm bilen özüñizi ynamly duýuñ!",
                "instagram"=> "baharbeauty.tm"
            ],
            [
                "name_tm"=> "Batly corek",
                "level"=> 5,
                "categories"=> "10",
                "description_rus"=> "Производитель снековой продукции (сухарей) @batly.tm - серебряный партнёр бизнес-каталога @barde.biz\nСухари @batly.tm пользуются спросом  на протяжении длительного времени, так как доступны и отличаются хорошими вкусовыми качествами.\n@batly.tm предлагают для вас большое количество разных вкусов, среди которых каждый найдёт понравившийся вариант. При приготовлении сухарей применяется современная технология, позволяющая сохранять свойства злаковых культур. Благодаря этому они имеют незабываемый и превосходный вкус.\nПопулярны @batly.tm не только своим внешним стильным и ярким видом, но и приемлемой ценой.\nК тому же сухари можно использовать не только в качестве закуски, но и для приготовления салатов. \nНайди свой идеальный вкус!",
                "description_tm"=> "Iýmit önümlerini öndüriji @batly.tm - @barde.biz biznes katalogynyň kümüş hyzmatdaşy\n@batly.tm suharikleri elýeterli we tagamly bolany üçin köp wagtyñ dowamynda isleg bildirilýär.\n@batly.tm size köp sanly dürli tagamly suharikleri hödürleýär, olaryň arasynda her kim öz halaýan görnüşini tapyp biler. Suharikleri taýýarlamakda galla önümleriniň häsiýetlerini gorap saklamak üçin häzirki zaman tehnologiýasy ulanylýar. Munuň netijesinde ýatdan çykmajak we ajaýyp tagam döreýär.\n@batly.tm diňe bir özüne çekiji we açyk görnüşi bilen däl, eýsem amatly bahasy bilen hem meşhurdyr.\nMundan başga-da, suharikleri diňe bir güýmenmek üçin dälde, eýsem işdäaçar taýýarlamak üçin hem ulanylýar. \nIň oňat tagamyňyzy tapyň!\n@batly.tm\nbatly.tm@mail.ru",
                "instagram"=> "batly.tm",
                "email"=> "batly.tm@mail.ru"
            ],
            [
                "name_tm"=> "Bayhan",
                "level"=> 5,
                "categories"=> "1",
                "description_rus"=> "Ресторан “Bayhan” - серебряный партнёр бизнес-каталога @barde.biz\nУ ресторана “Bayhan” есть особая изюминка, которая заставляет посетителей возвращаться снова и снова, а прекрасная атмосфера и качество обслуживания подарят вам приятное  впечатление.\nРесторан “Bayhan” служит идеальным местом для респектабельного ужина, романтического свидания при свечах, а также для проведения частных и корпоративных мероприятий. \nВ зале есть место для сцены и танцпола.\nВас встретят вместе с радостью гостеприимства и вкусной едой. Авторские блюда и их уникальная подача, а также стильный и продуманный интерьер привлекают в это место ценителей изысканного вкуса. ",
                "description_tm"=> "“Baýhan” restorany @barde.biz biznes katalogynyň kümüş hyzmatdaşy\n“Baýhan” restoranynda myhmanlary gaýta-gaýta bu ýere gaýdyp getirýän aýratyn bir özüne çikijiligi bar we ajaýyp atmosfera, hyzmat edilişiñ ýokary hili sizde ýakymly bir ýatlama galdyrar.\n“Baýhan” restorany ýatdan çykmajak şemiñ başyndaky romantik agşamlygy, şeýle hem hususy we köpçülikleýin çäreler üçin amatly ýer bolup hyzmat edýär.\nZalda sahna we tans meýdançasy hem bar.\nSizi myhmansöýer gülki ýüzleri bilen garşy alarlar. Aşpeziñ Awtorlyk tagamlary we bu tagamlary özboluşly hödürlenmegi şeýle hem ajaýyp we oýlanyşykly içki dizaýny kaşañ ýerleri söýüjileri bu ýere çekýär.",
                "address"=> "ТРЦ “Gülzemin”",
                "phone"=> "72-64-13,90-38-03,72-64-18,90-38-04"
            ],
            [
                "name_tm"=> "Fragrensia",
                "photo"=>1,
                "level"=> 5,
                "categories"=> "5",
                "description_rus"=> "Магазин парфюмерии, уходовой\n и декоративной косметики @fragrensia - серебряный партнёр бизнес-каталога @barde.biz\n@fragrensia станет для вас настоящим проводником в мир косметических средств.\nВ магазине @fragrensia представлен огромный выбор оригинальной косметики и парфюмерии от ведущих мировых брендов. Здесь вы можете приобрести необходимые для вас товары в рассрочку на 6 месяцев. А при наличной покупке действует -30% скидка на весь ассортимент.\nОни знают о парфюмерии всё. Консультанты в магазине расскажут про самые трендовые новинки и хиты продаж, тем самым помогут сэкономить ваше время и точно подберут вам тот самый аромат.\nПахнуть дорого и без переплат? Легко!",
                "description_tm"=> "Parfýumeriýa, derini bejerýän we bezeg berýän kosmetika dükany @fragrensia @barde.biz biznes katalogynyň kümüş hyzmatdaşy\n@fragrensiýa kosmetika dünýäsine hakyky ýol görkezijidir.\n@Fragrensia dükany, dünýäniň öňdebaryjy markalaryndan özboluşly kosmetika we atyrlary hödürleýär. Bu ýerde zerur harytlary 6 aýlap bölekleýin satyn alyp bilersiňiz. Nagt satyn almak bilen bolsa, ähli önümlere -30% arzanladyş bar.\nParfýumeriýa hakynda hemme zatdan habarly dükanynyñ işgärleri, size iň öñdebaryjy moda täzelikleri barada gürrüň bererler we şeýlelik bilen wagtyňyzy tygşytlamaga we size ýakymly ys saýlamaga kömek ederler.\nGymmat we artykmaç tölegsiz parfum saýlasyñyz gelýärmi? Aňsatlyk bilen!\n@Fragrensia,+993 12 468376,+993 63 737377",
                "address"=> "ТРЦ «Berkarar», 2 этаж, С27",
                "instagram"=> "fragrensia",
                "phone"=> "+993 12 468376,+993 63 737377,+993 63 838388"
            ],
            [
                "name_tm"=> "Tiz sowda",
                "level"=> 5,
                "categories"=> "6",
                "description_rus"=> "Ветеринарная аптека ИП “Tiz söwda” @weterinar_apteka - серебряный партнёр бизнес-каталога @barde.biz\nЦель @weterinar_apteka - здоровье ваших  животных.\nКомпания  “Tiz söwda” специализируется на оптово-розничной поставке ветеринарных препаратов крупнейшим производителям сельскохозяйственной продукции - ветеринарные лечебницы, птицекомплексы Туркменистана.\nПреимущества ветаптеки=>\n✅ Все средства проверенные\n✅ Лекарства и другие препараты хранятся по инструкции\n✅ Ассортимент постоянно обновляется \n✅ Качественная продукция от лучших производителей \n✅ Услуга доставки, позволяющая получить ваш товар в удобном вам месте\nТовары @weterinar_apteka =>\n🔅 Зоотовары\n🔅Ветпрепараты\n🔅Аксессуары\n🔅Косметика\n🔅Амуниция\n🔅Миски\n🔅Домики\n🔅Лежаки\n🔅Ошейники\n🔅Намордники и многое другое\nПриобретая лекарственные или другие товары в @weterinar_apteka, вы принимаете правильное решение.",
                "description_tm"=> "Weterinariýa dermanhanasy IE “Tiz söwda” @weterinar_apteka - @barde.biz biznes katalogynyň kümüş hyzmatdaşy\n@Weterinar_apteka-nyň baş maksady siziň haýwanlaryňyzyň saglygydyr.\n\"Tiz söwda\"kompaniýasy, oba hojalyk önümleriniň iň köp öndürijisine - Türkmenistandaky weterinariýa klinikalaryna, guşçylyk fermalaryna weterinariýa dermanlaryny lomaý we bölekleýin üpjün etmekde ýöriteleşendir.\nWeterinariýa dermanhanasynyň peýdaly taraplary=>\n✅Àhli derman serişdeler barlagdan geçirilen\n✅ Dermanlar we beýleki derman serişdeleri görkezmelere laýyklykda saklanýar\n✅ Önümler yzygiderli täzelenýär\n✅ Iň oňat öndürijileriň hil önümleri\n✅ Harytlaryňyzy amatly ýerde almak we eltip bermek hyzmaty\n@weterinar_apteka- yñ önümleri =>\n🔅 Haýwanlaryñ iýmitleri\n🔅 Weterinariýa serişdeleri\n🔅 Aksessuarlar\n🔅 Kosmetika\n🔅 Gap-gaçlary\n🔅Öýjagazlar\n🔅 Ýakasyna dakylýan oşeýnikler\n🔅Agzyny berkidýän enjamlary\nEger-de siz @Weterinar_apteka-da dermanlyk ýa-da başga önümleri satyn alsaňyz, dogry karara gelersiňiz!\n@veterinar_apteka,+993 12 474649\nAndalib köç (1958), mir 4\/1, 70-nji öý\nveterinaryproducts1.com",
                "address"=> "Ул. Андалиба (1958), мир 4/1, дом 70",
                "instagram"=> "weterinar_apteka",
                "phone"=> "+993 12 474649",
                "website"=> "veterinaryproducts1.com"
            ],
            [
                "name_tm"=> "Nagys",
                "level"=> 5,
                "categories"=> "11",
                "description_rus"=> "Магазин мебели @nagysh_mebel_tm - серебряный партнёр бизнес-каталога @barde.biz\nЧто может быть важнее домашнего очага? Уют и покой, удобство и комфорт, эстетика и стиль ваших квартир - вот главное, чему служат диваны и кресла, шкафы и комоды, гарнитуры и так далее.\n @nagysh_mebel_tm представляют для вас огромный выбор продукции и товаров, сочетающее в себе высокое качество. Благодаря прекрасному внешнему виду мебель можно легко вписать в любой интерьер.\nВсе модели изготовлены из натуральных материалов безопасных для здоровья, соответствующих современным и актуальным тенденциям нашего времени",
                "description_tm"=> "Mebel dükany @nagysh_mebel_tm - @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nJaýyñ içindäki rahatlykdan has möhüm zat näme bolup biler? Otaglaryňyzyň owadan durky kwartiralaryňyzyň estetikasy we stili - diwanlar we oturgyçlar, şkaflar we sandyklar, bularyñ hemmesi siziň öýüñize görk goşýan esaslaryñ biridir.\n @nagysh_mebel_tm size ýokary hilli mebel önümleriň köp görnüşini hödürleýär. Owadan we amatly mebelleri öýüñ islendik ýerinde aňsatlyk bilen ýerleşdirilip bilner.\nÄhli mebel modelleri döwrümiziň häzirki zaman talaplaryna laýyk gelýän saglyk üçin howpsuz tebigy materiallardan ýasalýar.\n@nagysh_mebel_tm,+993 12 754346,+993 64 381515\nAşgabat. G.Kuliýewa köç. 94 dükan,+993 12 760609,+993 64 471616\nAşgabat, A.Döwletowa köç (Lomonosow-Bedew), 42 dükan,+993 61 441717,+993 61 494121\nAşgabat, A.Döwletowa (Ak Toprak binasy), 1-nji gat\nBalkanabat, Jebel",
                "address"=> "Город Ашхабад ул. Г. Кулиева 94 магазин",
                "instagram"=> "nagysh_mebel_tm",
                "phone"=> "+993 12 754346, +993 64 381515,+993 12 760609, +993 64 471616,+993 61 441717, +993 61 494121"
            ],
            [
                "name_tm"=> "Atyrlar dunyasi",
                "level"=> 5,
                "categories"=> "5",
                "description_rus"=> "Сеть магазинов разливной парфюмерии @atyrlardunyasi_tkm - серебряный партнёр бизнес-каталога @barde.biz \n@atyrlardunyasi_tkm - официальный представитель Швейцарской фабрики Lizi. Данная фабрика занимается воссозданием парфюмерных композиций и является одной из лучших на международном рынке. @atyrlardunyasi_tkm работают с фабрикой на протяжении 5 лет и зарекомендовали себя как надёжный поставщик. Представлено более 500 ароматов, невероятно стойкие и изысканные, от восточных до европейских ароматов, подчёркивающие чувство собственного превосходства.\nИстинным ценителям предлагаются парфюмерные композиции от масс-маркета до селективно в оригинальных и декоративных флаконах и на разлив от 3 мл и выше",
                "description_tm"=> "Parfýumeriýa dükanlarynyñ toplumy @atyrlardunyasi_tkm @barde.biz biznes katalogynyň kümüş hyzmatdaşydyr\n@atyrlardunyasi_tkm Şweýsariýanyň Lizi zawodynyň resmi wekili. Bu zawod atyr önümleriniñ durkuny täzelemek bilen halkara bazaryndaky iň naýbaşy atyr öndürijileriñ biri hasaplanýarlar. @atyrlardunyasi_tkm zawod bilen 5 ýyl bäri işleýär we ygtybarly üpjün ediji hökmünde özüni tanadyp gelýär. Bu ýerde size Aziýa we ýewropanyñ hoşboý yslarynyñ 500-den gowragy hödürlenýär. Bu hoşboý atyrlar siziň özboluşlygyñyzy beýan eder.\nHakyky atyr söýüjiler üçin asyl we bezeg çüýşelerinden 3 ml we ondan ýokary ml çüýşe üçin atyr önümleri hödürlenýär.\n@atyrlardunyasi_tkm,+993 61 87 11 11\natyrlar.dunyasi.tkm@mail.ru",
                "instagram"=> "atyrlardunyasi_tkm",
                "phone"=> "+993 61 87 11 11",
                "email"=> "atyrlar.dunyasi.tkm@mail.ru"
            ],
            [
                "name_tm"=> "G Keya",
                "photo"=>1,
                "level"=> 5,
                "categories"=> "5",
                "description_rus"=> "Магазин профессиональной косметики @gkeya_ @keyaalliance - серебряный партнёр бизнес-каталога @barde.biz\nЧем отличается профессиональная косметика от обычной? «Любительские» средства в сочетают визаж и уход. В них входят увлажняющие компоненты, комплексы для антивозрастного эффекта, минералы для матирования и другие добавки. Главное, чтобы текстура была приятной, нанесение – легким, а упаковка – стильной.\nПрофессиональная косметика «работает» на эстетический результат. Она используется для фотосессий, съемок, образов, а значит, должна делать лицо и образ визуально безупречными. В её состав входят растительные экстракты, гиалуроновая кислота для большей стойкости, ровного покрытия и т.д. Даже самая лучшая профессиональная косметика может выглядеть невзрачно=> дизайн упаковки для мастера визажа – вопрос второстепенный\nВ магазине @gkeya_ вы найдёте средства для любого возраста, типа и цвета кожи. У вас есть возможность выбрать именно то, что замаскирует незначительные недостатки и выгодно подчеркнёт достоинства. \n@gkeya_ - место, предназначенное для женщин \nЕсли вы теряетесь в богатстве выбора, то продавцы-консультанты с удовольствием вам помогут и расскажут отличия тех или иных средств. ",
                "description_tm"=> "Professional kosmetika dükany @gkeya_ @keyaalliance - @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nProfessional kosmetika bilen adaty kosmetikanyň arasynda näme tapawut bar? \"Höwesjeň\"10 makiýaź bilen idegi birleşdirýär. Olara nemlendiriji maddalar, garramaga garşy toplumlar, gabat gelýän minerallar we beýleki goşundylar girýär. Esasy zat gurluşy ýakymly, ýerine ýetirilişi aňsat we döwrepaplaşan gaplamasynyñ bolmagy.\nProfessional kosmetika estetiki netije üçin işleýär. Esasan professional kosmetikany surata düşmek üçin ulanylýar, bu bolsa ýüzi we şekili wizual görnüşde tekiz we ýylmanak edÿär. Onda ösümlik ekstraktlary, has berkligi üçin gialuron turşusy goşulýar. \n@Gkeya_ dükanynda islendik ýaş üçin, deriniň görnüşi we reňki üçin önümleri tapyp bilersiňiz. Şeýle hem ujypsyz kemçilikleri ýapyp we artykmaçlyklaryny bellemäge mümkinçilik bar.\n@gkeya_ gelin-gyzlar üçin niýetlenen ýer\nKosmetika önümlerini saýlamakda kynçylyk ýüze çykan ýagdaýynda, satuw kömekçileri size kömek etmäge we belli bir serişdäniň arasyndaky tapawudy aýtmaga şat bolarlar.\n@gkeya_\n@keyaalliance,+993 63 972535,+993 61 166116\n\"Berkarar\"söwda merkezi, 2gat, c-88",
                "address"=> "ТРЦ «Беркарар», 2 этаж, с-88",
                "instagram"=> "gkeya_,@keyaalliance",
                "phone"=> "+993 63 972535,+993 61 166116"
            ],
            [
                "name_tm"=> "Serianno",
                "level"=> 5,
                "categories"=> "4",
                "description_rus"=> "Премиальный бренд одежды @serianno_tm- серебряный партнёр бизнес-каталога @barde.biz \nПредпочитаете качественный товар по разумным ценам?\nКачественная и модная одежда @serianno_tm – это разнообразный и элегантный гардероб по приемлемым ценам.\nПутешествие модного бренда началось в 1997 году с бутика трикотажных изделий в Стамбуле. Далее добавили женскую и мужскую одежды в свежие, элегантные и современные коллекции. \n@serianno_tm отбирают высококачественное сырьё - пряжу, производимую в соответствии со стандартами высочайшего качества лучших марок от ведущих компаний для модной и инновационной продукции.",
                "description_tm"=> "Premium geýim markasy @serianno_tm @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nElýeterli bahadan ýokary hilli önüm gözleýärsiňizmi?\n@serianno_tm size ýokary hilli we elýeterli bahalardan owadan we döwrepap eşikleri hödürleýär. \nModa markasyna syýahat 1997-nji ýylda Stambulda kaşañ butiklerden adaty trikotaj önümlerine çenli söwdä bazaryna çykarylyp başlanyldy. Wagtyñ geçmegi bilen gyz-gelinleriñ we ýigitleriñ owadan we döwrebap kolleksiýalary döredilip başlandy. \n@serianno_tm size ýokary hilli çig mal önümlerinden moda we innowasiýon eşikleri Turkiýanyñ öňdebaryjy kompaniýalardan iň oňat markalaryndan size hödürleýär.\n@serianno_tm,+993 64 013922\nmyahri.byashimova@gmail.com",
                "instagram"=> "serianno_tm",
                "phone"=> "+993 64 013922",
                "email"=> "myahri.byashimova@gmail.com"
            ],
            [
                "name_tm"=> "Owez mebel",
                "level"=> 5,
                "categories"=> "11",
                "description_rus"=> "Изготовитель мебели на заказ @mebel_ussasy - серебряный партнёр бизнес-каталога @barde.biz\nМебель формирует представление о хозяине, придаёт комфортную обстановку. Мастера @mebel_ussasy создают мебельные композиции, которые непременно украсят ваш дом, обеспечивая удобство, уют и оригинальность.\nОсновные преимущества качественной мебели на заказ=> \n🔵 При выполнении заказа можно изготовить мебель любого размера, подогнав её под помещение\n🔵 У вас полная свобода в выборе дизайна, расцветок, материала. Возможность следовать своим вкусовым предпочтениям \n🔵 Возможность регулировать стоимость мебели \nУдовольствие жизни познаётся в комфорте!",
                "description_tm"=> "Ýörite mebel önümlerini öndüriji @mebel_ussasy @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nMebel öz öý eýesine rahatlyk berip amatly gurşaw bilen gurşap alýar. @mebel_ussasy ussalary öýüňizi bezäp, amatlylygy, rahatlygy we özboluşlylygy üpjün etjek mebel kompozisiýalaryny dörederler.\nÝokary hilli ýasalan mebelleriň esasy artykmaçlyklary=>\n🔷 Sargyt ýerine ýetirilende, otaga ýerleşer ýaly islendik ululykdaky mebel saýlap bilersiňiz\n🔷Dizaýn, reňk, material saýlamakda doly erkinligiňiz bar. Öz islegleriňizi görä saýlamak ukyby\n🔷 Mebelleriň bahasyny sazlamak ukyby. Ýagny amatly bahalary.\nDurmuşyň lezzeti rahatlykda tapylýar!\n@mebel_ussasy,+993 65 402407,+993 63 044007\nowezmebel@gmail.com",
                "instagram"=> "mebel_ussasy",
                "phone"=> "+993 65 402407,+993 63 044007",
                "email"=> "owezmebel@gmail.com"
            ],
            [
                "name_tm"=> "Taekwondo",
                "level"=> 5,
                "categories"=> "9",
                "description_rus"=> "Общественная организация “Türkmenistanyň Taekwon-do (ITF) milli merkezi” @taekwondo.school.tm  - серебряный партнёр бизнес-каталога @barde.biz\nТхэквондо - это очень старый азиатский боевой стиль, который в основном \nоснован на ударах ногами. Это вид спорта, который демонстрирует самооборону, дисциплину, сосредоточенность и хорошее здоровье, и, безусловно, имеет много преимуществ.\nТхэквондо — это не только физическая активность. Данный вид спорта имеет много общего с умственной дисциплиной, как и с физической. Каждый набор движений, каждый удар и каждая стойка требуют дисциплины, чтобы овладеть ими.\n \nВсе, что вы делаете в жизни, требует большой дисциплины, и обучение в @taekwondo.school.tm  — отличный способ научиться ставить цели и достигать их.",
                "description_tm"=> "Jemgyýetçilik guramasy “Türkmenistanyñ Taekwon-do (ITF) milli merkezi” @taekwondo.school.tm @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nTaekwondo, esasan, Aziýanyň gadymy söweş sungaty bolup, esasan urgylara esaslanýar. Öz-özüňi goramagy, tertip-düzgüni, ünsi we saglygy öwredýän sportyñ bir görnüşi.\nTaekwondo diňe bir fiziki işjeňlik däl. Bu sport, akyl terbiýesi bilen fiziki tertip-düzgün bilen baglanyşyklydyr. Her hereket, her urgy we her bir pozisiýa olary özleşdirmek üçin kadalygy talap edýär.\n Durmuşda edýän her bir işiňiz köp tertip-düzgüni talap edýär we @taekwondo.school.tm-de maksada ýetmegiñ usullaryny öwrenmegiň ajaýyp usulydyr.\n@taekwondo.school.tm,+993 63 910001,+993 63 006465\nAşgabat, \"Olimpiýa şäheri\"",
                "address"=> "Г. Ашхабад, «Олимпийский городок»",
                "instagram"=> "taekwondo.school.tm",
                "phone"=> "+993 63 910001, +993 63 006465"
            ],
            [
                "name_tm"=> "Gul parcasy",
                "level"=> 5,
                "categories"=> "4",
                "description_rus"=> "Магазин ткани @gul_parcasy - серебряный партнёр бизнес-каталога @barde.biz\nТкани творят чудеса с женской фигурой. Стройные девушки выглядят в платьях как ангелы, спустившиеся с небес. А вот обладательницам пышных форм достаточно правильно подобрать материл по цвету и рисунку, что сделает девушку еще привлекательнее.\nВ магазине @gul_parcasy представлены только изысканные материалы, настоящее воплощение вкуса, стиля и элегантности. Мягкость и нежность предлагаемых тканей заставят вас возвращаться сюда снова и снова \nАссортимент тканей регулярно пополняется. Приобретайте качественную ткань в различных расцветках на свой вкус в @gul_parcasy по привлекательной цене!",
                "description_tm"=> "Mata dükany @gul_parcasy @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nMatalar zenanyñ görküne görk goşýarlar. Näzik gyzlar köýnek geýenlerinde jennetden inen perişdelere meňzeýärler. Ajaýyp keşbiñ eýeleri bolmak üçin reňk we nagyş boýunça dogry matany saýlamak ýeterlikdir, bu bolsa gyzy hasam özüne çekýär.\n@gul_parcasy dükanyñ ajaýyp matalary, her gyz-geliniñ islegini kanagatlandyryp, stiliň we nepisligiň hakyky beýany tapyp berer. Teklip edilýän matalaryň ýumşaklygy we näzikligi sizi bu ýere gaýta-gaýta dolandyrar. \nMatalaryň görnüşleri yzygiderli täzelenýär. Dürli reňkdäki ýokary hilli matalary özüne çekiji bahadan @gul_parcasy-da satyn alyň!\n@gul_parcasy\n725048\n724636\n\"Aşgabat\"söwda merkezi",
                "address"=> "ТРЦ «Ашхабад»",
                "instagram"=> "gul_parcasy",
                "phone"=> "725048, 724636"
            ],
            [
                "name_tm"=> "Pijama store",
                "level"=> 5,
                "categories"=> "4",
                "description_rus"=> "Магазин одежды @pijama_store_tm - серебряный партнёр бизнес-каталога @barde.biz\nМагазин одежды для сна, дома и отдыха @pijama_store_tm представляет вам =>\n☁️ пижамы абсолютно для всех\n☁️ бельё для мужчин и женщин\n☁️ колготки и носки \nХотите хорошо выспаться? Тогда правильно подбирайте себе пижаму.\nЗдесь вы можете подобрать классические пижамы, составляющими которых являются шорты или штаны. Их часто выбирают как уютный домашний костюм.\nПижамы высокого качества для вашего комфорта во время сна только в @pijama_store_tm✨",
                "description_tm"=> "Egin-eşik dükany @pijama_store_tm - @barde.biz biznes katalogynyň kümüş hyzmatdaşy\n@pijama_store_tm size öýde we dynç alyşda geýilýän egin-eşikleri hödürleýär=>\n☁️Hemmeler üçin niýetlenilen pijama\n☁️Erkekler we aýallar üçin içki eşikler\n☁️Ýyly we ýuka joraplar\nRahat ýatmak isleýärsiňizmi? Onda özüňize laýyk pijamalary saýlaň.\nBu ýerde şortik ýa-da balak görnüşindäki klassiki pijamalary alyp bilersiňiz. Olar köplenç amatly öý eşigi hökmünde saýlanýar.\nDiňe @pijama_store_tm-de ýatanyňyzda rahatlygyňyz üçin ýokary hilli pijama tapyp bilersiñiz!\n@pijama_store_tm,+993 61 889838,+993 64 889838\nAlişer Nawoi köçesi \"Altyn Zaman\"söwda merkezi",
                "address"=> "Ул. Алишера Навои, ТЦ «Altyn Zaman»",
                "instagram"=> "pijama_store_tm",
                "phone"=> "+993 61 889838,+993 64 889838"
            ],
            [
                "name_tm"=> "Maksada okgunly",
                "level"=> 5,
                "categories"=> "10",
                "description_rus"=> "Индивидуальное предприятие @maksada_okgunly_  - серебряный партнёр бизнес-каталога @barde.biz\nИндивидуальное предприятие @maksada_okgunly_  - первое предприятие в Туркменистане, которое занимается промышленным производством индюшиного мяса.\nПтицеферма @maksada_okgunly_ была основана в 2015 году. За год предприятие выпускает более 4,8 тысячи тонн готовой продукции из мяса птицы, прошедшей международную сертификацию. В ближайшее время спектр мясных деликатесов из мяса индейки планируется расширить до 57 видов.\nПтицеферма Maksada okgunly оснащена бельгийским, немецким, французским и турецким оборудованиями.\nПомимо мяса индейки @maksada_okgunly_ намерены производить мясо утки и гуся. \nМясо индейки повышает иммунитет и укрепляет репродуктивные способности человека. Не вызывает аллергии у малышей и помогает правильному развитию плода у беременных. Ученые заметили, что регулярное употребление продукта предупреждает развитие онкологии.",
                "description_tm"=> "“Maksada okgunly” kärhanasy @barde.biz biznes katalogynyň kümüş hyzmatdaşy\n@maksada_okgunly_ kärhanasy, Türkmenistanda hindi etiniň senagat önümçiligi bilen meşgullanýan ilkinji kärhana.\n@maksada_okgunly_ guşçylyk fermasy 2015-nji ýylda esaslandyryldy. Ýyllaryñ dowamynda kärhana halkara sertifikatyndan geçen 4,8 müň tonnadan gowrak taýýar guş etini öndürýär. Geljekde hem, hindi towugyndan taýýarlanylýan etli tagamlaryň görnüşini 57 görnüşe çenli giňeltmek meýilleşdirilýär.\nMaksada okgunly guşçylyk fermasy Belgiýa, Nemes, Fransuz we Türk enjamlary bilen enjamlaşdyrylandyr.\n@Maksada_okgunly_ kärhanasynyñ öñünde goýan maksady hindi towugyndan başga-da, ördek we gaz etini öndürmek.\nHindi eti immuniteti ýokarlandyrýar we adamyň işleýiş ukybyny güýçlendirýär. Çagalarda allergiýa döretmeýär we göwreli aýallarda çaganyñ dogry ösmegine kömek edýär. Alymlar önümi yzygiderli ulanmagyň onkologiýanyň ösmeginiň öňüni alýandygyny tassykladylar.\n@maksada_okgunly_,+993 63 234237,+993 12 488062\nmaksadaokgunly.com\nmaksatismailovich11@gmail.com",
                "instagram"=> "maksada_okgunly_",
                "phone"=> "+993 63 234237,+993 12 488062",
                "email"=> "maksatismailovich11@gmail.com",
                "website"=>"maksadaokgunly.com"
            ],
            [
                "name_tm"=> "Ak Tam bazary",
                "level"=> 5,
                "categories"=> "13",
                "description_rus"=> "Торговая онлайн-площадка @aktam.bazary - серебряный партнёр бизнес-каталога @barde.biz\n@aktam.bazary - первая онлайн торговая площадка Туркменистана. \nЗдесь вы сможете найти абсолютно разнообразные виды продукции (услуг) и приобрести всё нужное в одном месте. Данная платформа предоставляет предпринимателям возможность создавать интернет-сайт и наладить полноценную торговлю товарами и услугами в онлайн-сфере, а посетителям - легко и просто совершать покупку.\nДля продавцов @aktam.bazary - недорогой и эффективный способ продвижения товаров.\nУслуги при сотрудничестве=>\n🔹Личный кабинет\n🔹Реклама и ролик в Инстаграм\n🔹Реклама и ролик в TikTok\n🔹Статья в интернет-портале\n“AK TAM BAZARY” - это универсальный ответ на любой запрос, начало поиска и его конечная остановка. Они избавляют своих клиентов от неприятных компромиссов, исполняя желания и позволяя мечтать смелее.\nВсё, что ты любишь, можно найти на одном сайте.",
                "description_tm"=> "Onlaýn söwda platformasy @aktam.bazary, @barde.biz biznes katalogynyň kümüş hyzmatdaşy\n@aktam.bazary Türkmenistanda ilkinji onlaýn bazary hasaplanýar.\nBu ýerde düýbünden dürli görnüşli önümleri (Hyzmatlary) tapyp bilersiňiz we zerur zatlary bir ýerde satyn alyp bilersiňiz. Bu platforma telekeçilere internet sahypasyny döretmäge we onlaýn ulgamda harytlar we Hyzmatlar bilen doly söwda gurmaga mümkinçilik döredýär.\nHyzmatdaşlyklaryñ arasyndaky Hyzmatlary=>\n• Şahsy otag\n• Instagramda mahabat we wideo roliklar\n• TikTok-da wideorolik mahabaty\n• Internet portalynda makala\n“AK TAM BAZARY”, islendik haýyşa gözlegiň başlangyjy we ahyrky duralgasyna ähliumumy jogap. Müşderilerini ýakymsyz ylalaşyklardan halas edýärler, islegleri ýerine ýetirýärler we has batyrgaý arzuw etmäge mümkinçilik berýärler.\nHalaýan zatlaryňyzyň hemmesini bir sahypada tapyp bilersiňiz.\n@aktam.bazary,+993 62 554884,+993 62 572442",
                "instagram"=> "aktam.bazary",
                "phone"=> "+993 62 554884,+993 62 572442"
            ],
            [
                "name_tm"=> "TUT drinks",
                "level"=> 5,
                "categories"=> "10",
                "description_rus"=> "Производитель витаминизированных безалкогольных напитков @tut.drinks - серебряный партнёр бизнес-каталога @barde.biz\nНесмотря на то, что продукция “TUT” появилась совсем недавно на рынке, она уже набирает огромные обороты.\n@tut.drinks представляют для вас 7 видов энергетических напитков=>\n1. Belle\n2. Gurt\n3. Multishake \n4. Gant\n5. Ary\n6. Tut orange\n7. Tut kola\nА также очищенную газированную и негазированную воду.\n♦️Попробовав каждый вид, вы несомненно найдёте тот, который не оставит вас равнодушным и сделает ваш день красочнее, а жизнь ещё ярче.\n♦️Напитки имеют приятный вкус и эффективно утоляют жажду.\n♦️В составе напитков только лучшие ингредиенты и натуральный сахар, поэтому напитки имеют такой насыщенный и невероятный вкус.\n♦️Продукция TUT распространяется не только в центре, но и во всех велаятах. ",
                "description_tm"=> "Güýçli alkogolsyz içgileri öndüriji @tut.drinks @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nTUT önümleriniň ýakynda bazara çykandygyna garamazdan, eýýäm uly ösüş gazandy.\n@tut.drinks size 7 görnüşli energetik içgilerini hödürleýär=>\n1.Belle\n2. Gurt\n3.Multişake\n4.Gant\n5. Ary\n6. Pyrtykal\n7. Tut kola\nŞeýle hem arassalanan gazlandyrylan we gazlandyrylmadyk suwlar.\n♦Her görnüşi synap göreniňizde, size biperwaý galmajak we günüňizi has reňkli we durmuşyňyzy has ýagtylandyrjak bir tagamy taparsyňyz.\n♦Bu içgiler ýakymly tagamly bolup suwsuzlygy netijeli kanagatlandyrar.\n♦ Içgilerde diňe iň oňat maddalar we tebigy şeker bar, şonuň üçin içgiler şeýle baý we ajaýyp tagamly bolýarlar.\n♦ TUT önümleri diňe bir şäheriñ içinde däl, eýsem ähli welaýatlarda hem ýaýradylýar.\n@tut.drinks,+993 12 576106,+993 62 624444\ntut.drinks@gmail.com",
                "instagram"=> "tut.drinks",
                "phone"=> "+993 12 576106,+993 62 624444",
                "email"=> "tut.drinks@gmail.com"
            ],
            [
                "name_tm"=> "Muskus",
                "level"=> 5,
                "categories"=> "5",
                "description_tm"=> "Atyr dükany @Muskus_turkmenistan - @barde.biz biznes katalogynyň kümüş hyzmatdaşy\nÖnümleriň köp görnüşi we amatly bahalar sebäpli parfýumeriýa önümçiligi uly meşhurlyk gazandy. Önümleriñ köpdürliligi birbada birnäçe atyr satyn almaga mümkinçilik berýär.\n@Muskus_turkmenistan-da dünýä belli markalaryň döreden, ýöne amatly bahadan we zerur mukdarda atyrlary satyn almak üçin ajaýyp mümkinçilikdir. Dogry, käwagt isleglerimiz şeýle bir çalt üýtgeýär - we bize ýüz millilitr atyr çüýşejigi almagyñ zerurlygy ýok.\nParfýumeriýanyň ysynyñ berkligi markaly önümlerden pes däldir. Daş keşbiňizi üstünlikli doldurjak halaýan atyrlaryňyzyň birnäçe çüýşesini bu ýerden satyn alyp bilersiňiz\n@muskus_turkmenistan,+993 64 328998\nS. Seýdi köç. “Aşgabat” Söwda merkezi, A 105"
            ],
            [
                "name_tm"=> "Gavani",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "4",
                "description_rus"=> "Магазин мужской одежды @gavani_tm - золотой партнёр бизнес-каталога @barde.biz\nКаждый мужчина хочет достойно выглядеть в глазах женщин, начальника, деловых партнёров.\nВаш имидж - то, как воспринимают вас окружающие, находится под постоянным влиянием вашей одежды - даже давно знакомые люди начнут воспринимать вас по-новому при смене стиля. Благодаря стильной одежде @gavani_tm вы будете выглядеть солидно, дорого и эффектно.\nGavani - это люксовая одежда для мужчин, в которой вы будете чувствовать себя комфортно.\n \nСтильная мужская одежда - ключ успеха в обществе !",
                "description_tm"=> "Ýigitleriñ egin-eşikler dükany @gavani_tm - @barde.biz biznes katalogynyň altyn hyzmatdaşy\nHer bir goç ýigit aýal-gyzlaryň öňünde mynasyp görünmek isleýär.\nSiziň keşbiňiz - beýlekileriň sizi nähili kabul edýändigi - geýýän eşikleriňize hem täsir edýär - hatda uzak wagtlap tanaýan adamlaryňyzam stili üýtgedeniňizde sizi täzeçe kabul edip başlarlar. @Gavani_tm ajaýyp eşikleriň kömegi bilen siz gymmat we täsirli görünersiňiz.\nGavani, özüňizi rahatlandyrjak erkekler üçin kaşaň eşiklerdir!\n \nAjaýyp ýigitleriñ eşikleri jemgyýetde üstünlik gazanmagyň açarydyr!\n@gavani_tm,+993 63 820099\n \"Berkarar\"söwda merkezi, 3-nji gat, D71",
                "address"=> "ТРЦ «Berkarar», 3 этаж, D71",
                "instagram"=> "gavani_tm",
                "phone"=> "+993 63 820099"
            ],
            [
                "name_tm"=> "Hezzet",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "1",
                "description_rus"=> "Торгово-развлекательный комплекс @hezzet_dync_alys_merkezi - золотой партнёр бизнес-каталога @barde.biz\n“Hezzet” - многофункциональный торгово-развлекательный комплекс , объединяющий в себе национальную, турецкую, европейскую кухни , просторный ресторан, уютное Patisserie, игровую площадку, маркет и брендовый магазин одежды “LC WAIKIKI” для всей семьи.\n“Hezzet” подходит для проведения различных торжеств и праздников, таких как дни рождения, свадебные церемонии, фуршеты, банкеты, садака, деловые встречи и переговоры.\nЗдесь же вы можете заказать блюда с доставкой на дом. Все блюда приготовлены по лучшим традиционным рецептам. Вкусные, сытные и аппетитные. ",
                "description_tm"=> "Söwda we dynç alyş merkezi @hezzet_dync_alys_merkezi @barde.biz biznes katalogynyň altyn hyzmatdaşydyr.\n“Hezzet” milli, türk we ýewropa aşhanalaryny özünde jemleýän restorany. Şeýle hem bu dynç alyş merkezi amatly Patisseri, oýun meýdançasyny, markety we “LC WAIKIKI” markaly egin-eşik dükanyny özünde jemleýän köpugurly söwda we güýmenje toplumydyr.\n\"Hezzet\", doglan günler, toý dabaralary, kabul ediş çäreleri, banketlery, sadakalar, iş duşuşyklar ýaly dürli dabaralary we baýramçylyklary geçirmek üçin amatly ýerleriñ biridir.\nBu ýerde öýe eltip bermek üçin nahar sargyt edip bilersiňiz. Naharlaryň hemmesi iň oňat reseptlere laýyklykda taýýarlanýar. Lezzetli, kanagatlandyryjy we işdäaçar.\n@hezzet_dync_alys_merkezi\n@zehinlijetm\n@lcwaikikihezzet,+993 12 498002 | restoran,+993 12 490695 | bazary",
                "instagram"=> "hezzet_dync_alys_merkezi,zehinlijetm,lcwaikikihezzet",
                "phone"=> "+993 12 498002,+993 12 490695"
            ],
            [
                "name_tm"=> "Erjel-Begench",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "12",
                "description_rus"=> "Индивидуальное предприятие @erjelbegench_hk - золотой партнёр бизнес-каталога @barde.biz\nПроизводитель тротуарной плитки @erjelbegench_hk предлагает вам огромный ассортимент своей продукции с широкой цветовой гаммой. Все плитки производятся в строгом соответствии с государственными стандартами.\nТротуарная плитка отличается высокой прочностью и долговечностью, применяется для обустройства улиц, площадок, частных территорий.\n“Erjel Begench” изготавливают плиточные тротуары, вдольдорожные и автомагистральные бордюры по бетонно-мраморным технологиям.\nЗаказывая плитку у “Erjel Begench”, вы останетесь довольным высоким качеством. Вас не разочарует изысканный внешний вид тротуарной плитки.",
                "description_tm"=> "“Erjel begenç” @erjelbegench_hk hususy kärhanasy- @barde.biz biznes kitapçasynyñ altyn hyzmatdaşy\nPyýada geçelgeleriñ plitalaryny öndüriji @erjelbegench_hk size dürli reňkdäki önümleriň köp görnüşini hödürleýär. Plitkalaryň hemmesi döwlet standartlaryna laýyklykda öndürilýär.\nAsma plitalar ýokary güýç we çydamlylyk bilen tapawutlanýarlar. Köçeleri, oýun meýdançalaryny we hususy ýerleri tertiplemek üçin hem ulanylýarlar.\n\"Erjel Begench\"beton mermer tehnologiýalaryny ulanyp, kafelli pyýada ýollary, ýoluň we Awtoulag ýollarynyň, duralgalarynyñ plitalaryny öndürýärler.\n\"Erjel Begench\"-den plitka sargyt edeniňizde, ýokary hil bilen kanagatlanarsyňyz. Asma plitalaryň ajaýyp sudyry siziň göwnüñizden turar.\n@erjelbegench_hk,+993 62 538998,+993 65 814871\nerjelbegench.com\ninfo@erjelbegench.com",
                "instagram"=> "erjelbegench_hk",
                "phone"=> "+993 62 538998,+993 65 814871",
                "email"=> "info@erjelbegench.com",
                "website"=>"erjelbegench.com"
            ],
            [
                "name_tm"=> "Ayhan mebel shaylary",
                "level"=> 4,
                "categories"=> "10",
                "description_rus"=> "Магазин мебельных аксессуаров @ayhan_mebel_shaylary  и магазин искусственных цветов @ayhan_flowers _ золотые партнёры бизнес-каталога @barde.biz\nВ @ayhan_mebel_shaylary вы найдете широкий ассортимент комплектующих по очень доступным ценам.\nОни предложат Вам весь спектр функциональной фурнитуры (мебельные петли, крепеж и направляющие), лицевой фурнитуры (ручки, крючки и освещение) и комплектующих для шкафов-купе.\nПреимущества=>\n🔘 только качественная фурнитура.\n🔘 вы найдёте всё, что вам необходимо.\n🔘 приобретая фурнитуру здесь, вы можете быть уверены, что она прослужит вам долгие годы.\n🔘 приемлемые цены\nПоложительная роль цветов в нашей жизни неоспорима. Это и прилив положительных эмоций, и хорошее настроение. Простое решение этому – купить искусственные цветы.\nИскусственные цветы никогда не завянут. Также, им не требуется никакого ухода. Разве что пыль снимать или промывать в теплой воде.\nВ @ayhan_flowers представлен большой выбор различных искусственных цветов. \nБлагодаря оформлению вашего дома, рабочего помещения, двора цветами @ayhan_flowers, вы будете удивлены их красотой.",
                "description_tm"=> "Mebel esbaplary dükany @ayhan_mebel_shaylary we emeli gül dükany @ayhan_flowers @barde.biz biznes katalogynyň altyn hyzmatdaşlary \n@Aýhan_mebel_shaylaryn-da örän amatly bahalardan köp sanly esbaplary tapyp bilersiňiz.\nSize amatly enjamlaryň (mebel berkidijilerini we tutawaçlaryny), öňdäki furnituralary (tutawaçlar, çeňňekler, yşyklandyryş) we şkaflar üçin niýetlenilen enjamlaryñ doly toplumyny hödürleýär.\nGowy taraplary=>\n🔘 Diňe ýokary hilli enjamlar.\n🔘 Gerek zatlaryň hemmesini tapyp bilersiñiz\n🔘 Bu ýerde satyn alynan furnituralaryñ size uzak wagtyñ dowamynda hyzmat etjekdigini güwä geçýäris.\n🔘 amatly bahalar\nGülleriň durmuşymyzda oňyn orny tutýandygyny inkär edip bolmaýar. Güller oňyn duýgularyň köpelmegine getirýär. Bu duýgulary uzal wagtlap saklamagyñ aňsat çözgüdi bar, bu bolsa emeli gül satyn almakdyr.\nEmeli güller hiç haçan guramaz. Mundan başga-da, hiç hili tehniki hyzmaty talap etmeýärler. Diñeje tozanyny süpürmek gerek.\n@ayhan_flowers dürli emeli gülleriň köp görnüşini size hödürleýär. \nJaýyňyzy, iş ýeriňizi, howlyňyzy @ayhan_ gül gülleri bilen bezäp, olaryň gözelligine haýran galarsyňyz.\n@ayhan_mebel_shaylary,+993 61 608282\n754208\n Ý. Durdiýew köç, 52 \"Ak Enar\"binasy\nGurbansoltan eje köç,+993 65 884323\n@ayhan_ gülleri,+993 62 939339,+993 63 636317\n754208\n Ý. Durdiýew köç, 52 \"Ak Enar\"binasy",
                "address"=> "Ул. Й. Дурдыева, 52 здание “Ak Enar”, Ул. Гурбансолтан эдже Ул. Й. Дурдыева, 52 здание “Ak Enar”",
                "instagram"=> "ayhan_mebel_shaylary, ayhan_flowers",
                "phone"=> "+993 61 608282, +993 62 939339, +993 63 636317, 754208"
            ],
            [
                "name_tm"=> "Kysmat onumchilik",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "12",
                "description_rus"=> "Индивидуальное предприятие @kysmat_onumcilik - золотой партнёр бизнес-каталога @barde.biz\nМебельная фабрика @kysmat_onumcilik осуществляет производство мебели высокого качества=>\n❇️ Различные виды дверей\n❇️ Кухонная мебель \n❇️ Спальные гарнитуры \n❇️ Детская мебель\n❇️ Офисная мебель \nПроизводство @kysmat_onumcilik отвечает международному стандарту , что говорит о надежности и качестве производимых продуктов. \nПри производстве используется новейшее оборудование. Благодаря огромной базе материалов, вы можете выбрать любую модель на свой вкус. @kysmat_onumcilik осуществят любой задуманный Вами проект в кратчайшие сроки.\nВыбирайте комфорт и удобство для себя и своей семьи!",
                "description_tm"=> "Hususy eýeçilik kärhanasy @kysmat_onumcilik, @barde.biz biznes katalogynyň altyn hyzmatdaşy\nMebel zawody @kysmat_onumcilik ýokary hilli mebel öndürýär=>\n❇️ Dürli gapylar\n❇️Aşhana mebelleri\n❇️Ýatylýan otaglaryñ mebelleri\n❇️ Çagalaryň mebelleri\n❇️ Ofis mebelleri\n@Kysmat_onumcilik önümçiligi, öndürilen önümleriň ygtybarlylygy we hili halkara standartlara laýyk gelýär.\nIñ täze enjamlar bu kärhananyñ önümçiliginde ulanylýar. Ulanylýan materillaryñ uly bazasynyň kömegi bilen siz islän modeliňizi saýlap bilersiňiz. @kysmat_onumcilik, göz öňünde tutýan islendik taslamaňyzy gysga wagtda durmuşa geçirer.\nÖzüňiz we maşgalaňyz üçin rahatlygy we amatlylygy saýlaň!\n@kysmat_onumcilik\nkohk.tk\nkysmatonumcilik@gmail.com\nDükan=> +993 65 535313\nMebel öndürýän ussahanasy=>,+993 63 770050\nOfisi=> +993 12 454844\nMir 2\/4, 5-nji jaý",
                "address"=> "Мир 2/4, 5 дом ",
                "instagram"=> "kysmat_onumcilik",
                "website"=> "kohk.tk",
                "phone"=> "+993 65 535313, +993 63 770050, +993 12 454844",
                "email"=> "kysmatonumcilik@gmail.com"
            ],
            [
                "name_tm"=> "Hindiwar",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "15",
                "description_rus"=> "роизводитель стартерных аккумуляторных батарей “Hindiwar” - золотой партнёр бизнес-каталога @barde.biz\nИндивидуальное предприятие “Hindiwar”является одним из первых в Туркменистане  производителем стартерных аккумуляторных батарей.\n   \nОсновной вид деятельности - выпуск товаров народного потребления=> сборка - производство аккумуляторных батарей для автомобильной и тракторной техники всех видов.\nБлагодаря двадцатилетнему опыту разработки компания полностью за это время изучила все минусы и плюсы производства. В 2018 году «Хиндивар» впервые осуществило экспорт аккумуляторов в Киргизию.\nАккумуляторы производятся способом Low Maintenance Free, требующие минимального ухода, и прошли испытания в разных климатических условиях. Они выпускаются с эксплуатационным качеством с применением передовых технологий.",
                "description_tm"=> "Başlangyç batareýa öndürijisi “Hindiwar” @barde.biz biznes katalogynyň altyn hyzmatdaşy\n“Hindiwar” hususy kärhanasy Türkmenistanda başlangyç batareýalary öndürijileriň biridir.\nEsasy iş sarp edişleriñ biri harytlary gurnamak - ähli görnüşli Awtoulag we traktor enjamlary üçin batareýalary öndürmek.\nÝigrimi ýyllyk ösüş tejribesi netijesinde kompaniýa bu döwürde önümçiligiň ähli minuslaryny we plýuslaryny doly öwrendi. 2018-nji ýylda Hindivar ilkinji gezek Gyrgyzystana batareýa eksport etdi.\nBatareýalar az tehniki hyzmaty talap edýär we dürli howa şertlerinde synagdan geçirildi. Ösen tehnologiýalary ulanyp, amaly hil bilen öndürilýär.\nTelefon=> 57 64 23\/57 64 24\nE-mail=> ussatbattery@gmail.com \/ flinkbattery@gmail.com\nAhal welaýaty, Änew, Senagat N4 (senagat zolagy)",
                "address"=> "Ахалский велаят, г. Анау, Индустриальная N4 (промышленная зона)",
                "phone"=> "57 64 23, 57 64 24",
                "email"=> "flinkbattery@gmail.com, ussatbattery@gmail.com"
            ],
            [
                "name_tm"=> "Nesibeli doganlar",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "8",
                "description_rus"=> "Логистическая компания @nesibeli.doganlar - золотой партнёр бизнес-каталога @barde.biz\nЛогистическая компания @nesibeli.doganlar с 2010 года обеспечивает полный комплекс профессиональных услуг по оформлению  и доставке груза. Они успешно совершают доставку такими путями, как=>\n🔹железнодорожным\n🔹морским \n🔹автомобильным\nОни организовывают перевозки из Китая🇨🇳, ОАЭ🇦🇪 и Турция🇹🇷. Команда @nesibeli.doganlar с удовольствием проконсультируют вас относительно всех основных вопросов перевозки, разработают самый подходящий маршрут, учитывая ваши пожелания, груз и другие особенности.\n@nesibeli.doganlar рады представить для вас следующий услуги=>\n🔷 Консультация\n🔷 Страхование грузов\n🔷Мультимодальные перевозки\n🔷 Доставка груза от двери до двери \n🔷 Хранение и доставка сборных грузов \nВыбрав @nesibeli.doganlar вы можете быть спокойны, что ваш груз прибудет в целости и сохранности!",
                "description_tm"=> "8 kompaniýasy @nesibeli.doganlar @barde.biz biznes katalogynyň altyn hyzmatdaşy\nLogistika kompaniýasy @nesibeli.doganlar 2010-njy ýyldan bäri ýükleri eltip bermek üçin hünär Hyzmatlarynyň doly toplumyny hödürleýär. Olar şu usullar bilen ýükleri üstünlikli ýetirýärler=>\n🔹 Demir ýol\n🔹Deñiz üstaşarly\n🔹Awtoulag\nBu kompaniýa 🇨🇳Hytaýdan, BAE-den🇦🇪 we Türkiýeden🇹🇷 transport gurnaýarlar. @Nesibeli.doganlar topary ähli möhüm transport meseleleri boýunça size maslahat bermäge, islegleriňizi, ýüküňizi we beýleki aýratynlyklaryňyzy göz öňünde tutup iň amatly ugry ösdürmäge şat bolarlar.\n@nesibeli.doganlar size şu aşakdaky Hyzmatlary hödürlemekden hoşal=>\n🔷 Maslahat bermek\n🔷Ýük ätiýaçlandyryşy\n🔷Multimodal transportyñ görnüşi\n🔷Harytlary gapydan gapa eltip bermek\n🔷Toparlaýyn ýükleri saklamak we eltip bermek\n@Nesibeli.doganlar saýlap, ýüküňiziň howpsuz we ygtybarly geljekdigine güwä geçýäris!\n@nesibeli.doganlar,+99363900777\nAşgabat, G.Kuliýew köç, 2127",
                "address"=> "Г. Ашхабад, ул. Кулиева, 2127",
                "instagram"=> "nesibeli.doganlar",
                "phone"=> "+99363900777"
            ],
            [
                "name_tm"=> "Fabi",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "4",
                "description_rus"=> "Магазин обуви ручной работы @fabi_altyn_zaman - золотой партнёр бизнес-каталога @barde.biz\nСовершенная обувь существует - это обувь FABI !\nИтальянский темперамент налицо=> творческий порыв и умение им управлять, сочетание нестандартности и креативности дизайнерских решений с удобством и практичностью.\nИтальянский бренд FABI известен модникам всего мира, как законодатель мод и создатель лучшей обуви! Оригинальный дизайн и высокое качество используемых материалов повлияли на то, что компания стала популярна уже в первый год работы.\nКлассический стиль в исполнении FABI приобретает лоск и современное звучание, оставаясь при этом дизайном вне времени. Именно поэтому FABI выбирают солидные мужчины и женщины, чей стиль олицетворяет успех.",
                "description_tm"=> "Ýokary hilli aýakgap dükany @fabi_altyn_zaman, @barde.biz biznes katalogynyň altyn hyzmatdaşy\nFABI aýakgaplary bilen kämil aýakgap dünýasine hoş geldiñiz!\nBu aýakgaplarda Italiýan gylyk-häsiýetleri ýüzlin görünýär=> döredijilikli häsiýet we ony dolandyrmak ukyby, dizaýn çözgütleriniň özboluşlylygy we döredijiligi amatlylyk we amalylyk bilen utgaşdyrylýar.\nItaliýanyň “FABI” markasy modaçylara tendensiýa we iň gowy aýakgap döredijisi hökmünde tanalýar! Asyl dizaýn we ulanylan materiallaryň ýokary hili kompaniýanyň işiň ilkinji ýylynda meşhur bolmagyna goşant goşdy.\nFABI tarapyndan ýerine ýetirilen nusgawy stil bu aýakgaplara gaýtalanmajak kaşañlyk berip, bu köwüşler bolsa halk içinde döwrebap ses alýar. Şonuň üçin FABI-ni üstünlikli we abraýly ýigitler we gyz-gelinler tarapyndan saýlanýar.\n@fabi_altyn_zaman\n\"Altyn Zaman\"söwda merkezi, Alişer Nawoi köç \/ Mollanepes, 1-nji gat,+993 64 014543,+993 64 055019,+993 12 927733",
                "address"=> "ТЦ «Altyn Zaman», ул. Алишера Навои \ Молланепеса, 1 этаж",
                "instagram"=> "fabi_altyn_zaman",
                "phone"=> "+993 64 014543,+993 64 055019"
            ],
            [
                "name_tm"=> "Turkmen pochta",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "9",
                "description_rus"=> "Компания почтовой связи @turkmenpost_  - золотой партнёр бизнес-каталога @barde.biz Компания почтовой связи @turkmenpost_ - главный почтовый оператор в Туркменистане на протяжении 30 лет.\nКомпания «Туркменпочта» оказывает следующие услуги=>\n🔷 отправка и получение писем, бандеролей, посылок, возможность отслеживание посылок по трек-номеру;\n🔷 оформление подписки на газеты и журналы. Возможность онлайн-подписки через приложение «Abuna» и «Turkmenmetbugat»;\n🔷 почтовые денежные переводы;\n🔷 вызов курьера; (от двери-до двери)\n🔷оплата коммунальных услуг\n🔷 проверка штрафов в онлайн режиме через сайт https=>\/\/turkmenpost.gov.tm\/.\n«Туркменпочта» оказывает услуги в пяти велаятах, всех городах и посёлках городского типа. \nВ настоящее время число отделений «Туркменпочта» составляет 146, которые оборудованы современной техникой связи, где за услуги организован приём платежей безналичным способом, банковскими картами и наличными.",
                "description_tm"=> "Poçta kompaniýasy @turkmenpost_ @barde.biz biznes katalogynyň altyn hyzmatdaşy\n @Turkmenpost_ poçta kompaniýasy 30 ýyl bäri Türkmenistanda esasy poçta operatory bolup işleýär.\n\"Türkmenpoçta\"kompaniýasy şu aşakdaky Hyzmatlary hödürleýär=>\n🔷Hatlary, posylkalary ibermek we almak, posylkalary belgiler boýunça yzarlamak,\n🔷 Gazetlere we źurnallara ýazylmak. \"Abuna\"we \"Turkmenmetbugat\"programmasy arkaly onlaýn ýazylmak mümkinçiligi;\n🔷 Pul sargytlar poçtasy,\n🔷 Kurýer jaňy; (gapydan-gapa)\n🔷 Kommunal tölegleri tölemek\n🔷Https https=>\/\/turkmenpost.gov.tm\/ web sahypasy arkaly jerimeleri onlaýn barlaň.\n\"Türkmenpoçta\"bäş welaýatlarda ähli şäherler we şäherçe ilatly ýerlerde hyzmat edýär.\nHäzirki wagtda \"Türkmenpoçta\"şahamçalarynyň sany 146 bolup, häzirki zaman aragatnaşyk tehnologiýasy bilen enjamlaşdyrylan, Hyzmatlar üçin tölegler bank geçirimleri, bank kartlary we nagt pullar bilen gurnalan.\n@turkmenpost_ \nturkmenpost.gov.tm\ntmpost.marketing@gmail.com,+993 (12) 921495,+993 (12) 931491",
                "instagram"=> "turkmenpost_",
                "website"=> "turkmenpost.gov.tm",
                "phone"=> "+993 (12) 921495, +993 (12) 931491",
                "email"=> "tmpost.marketing@gmail.com"
            ],
            [
                "name_tm"=> "Yalkym",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "1",
                "description_rus"=> "Ресторан @yalkym_dostawka и кафе @yalkym_doner - золотые партнёры бизнес-каталога @barde.biz\nПрекрасный интерьер, высокий уровень обслуживания, потрясающая кухня - это всё вы обнаружите именно здесь! \nВремя тут пролетит незаметно, а уходить совсем не захочется.\nВы оцените качество горячих и холодных закусок, традиционных супов, салатов и горячих блюд.\nВыбор той или иной пиццы зависит от вкусовых пристрастий каждого=> Маргарита, Мясная, Грибная, острые пиццы, пиццы с различными видами сыра.\nНевероятно вкусные блюда сразятся вас наповал! Хотите вкусно поесть и насладиться атмосферой?\n Тогда вам в YALKYM! 🔥",
                "description_tm"=> "Restoran @yalkym_dostawka we @yalkym_doner kafesi @barde.biz biznes katalogynyň altyn hyzmatdaşlarydyr\nOwadan daşky gurşawy, ýokary derejeli hyzmat, ajaýyp aşhana - bularyň hemmesini şu ýerden tapyp bilersiňiz!\nBu ýerde siz wagtyñyzyñ nädip geçenini bilmän galarsyñyz. \nYssy we sowuk işdäaçarlaryň, adaty çorbalaryň, salatlaryň we gyzgyn tagamlaryň hiline baha beriñ. Siziň göwnüñizden turjakdygyndan güwä geçýäris!\nIslendik göwnüñe görä tagam saýlamak, her kimiň tagam isleglerine bagly=> Margarita, Etli pizza, kömelekli ýakymly pizzalar, dürli görnüşli peýnirli pizzalar.\nAjaýyp lezzetli tagamlar aňyňyza ýetip müdümilik galar! Lezzetli nahar iýmek we atmosferadan lezzet almak isleýärsiňizmi?\n Onda YALKYMA geliñ! 🔥\n@yalkym_dostawka\n607777\n726661\n637070\n728868\n@yalkym_doner\nAba Annaýew (2060) köç, “Toyota” merkezi\n148-148\n149-149\n660005",
                "address"=> "Ул. Аба Аннаева (2060), «Тойота» центр",
                "instagram"=> "yalkym_dostawka, yalkym_doner",
                "phone"=> "607777,726661,637070,728868,148-148,149-149,660005"
            ],
            [
                "name_tm"=> "R.B. Koz doner",
                "level"=> 4,
                "categories"=> "1",
                "description_rus"=> "Ресторан @rb_doner_tm - золотой партнёр бизнес-каталога @barde.biz\nКаждый день, после трудного рабочего дня или в выходные дни мы тратим свое драгоценное время на приготовление пищи. Пару лет назад приготовление еды дома было вкуснее и выгоднее, а сейчас заказ горячих блюд становится более популярным. \nПоэтому @rb_doner_tm, @rb_mangal, @rb_coffee_and_cakes предлагают вам познать невероятно вкусную еду, приготовленную с душой именно для вас! \nЗдесь готовят изумительные донеры и замечательный шашлык.\nКачество вкусной еды и быстрая доставка непременно порадуют Вас! \nЗаказывайте еду у  @rb_doner_tm ! ",
                "description_tm"=> "Restoran @rb_doner_tm @barde.biz biznes katalogynyň altyn hyzmatdaşy\nHer gün, işde ýa-da dynç günleri agyr günlerden soň, gymmatly wagtymyzy nahar bişirmek bilen geçirýäris. Birnäçe ýyl ozal öýde nahar bişirmek has tagamly we girdejili bolupdy, ýöne indi gyzgyn nahar sargyt etmek has meşhur boldy.\nŞonuň üçin @rb_doner_tm, @rb_mangal, @rb_coffee_and_cakes diňe siz üçin niýetlenilip bişirilen ajaýyp lezzetli iýmitleri sargyt etmäge çagyrýar!\nBu ýerde agzyñda ereýän, diýseñ tagamly dönerler we ajaýyp barbekyu taýýarlanýar.\nLezzetli iýmitiň we tiz wagtda eltip bermek hyzmaty sizi begendirer!\n@Rb_doner_tm-den tagamly naharlary sargyt ediň!\n@rb_doner_tm @rb_mangal\n10-10-90 19-60-60\n10-11-11 19-70-70\n@rb_coffee_and_cakes\n16-00-16\n67-44-67",
                "instagram"=> "rb_doner_tm, rb_mangal,rb_coffee_and_cakes",
                "phone"=> "10-10-90,19-60-60,10-11-11,19-70-70,16-00-16,67-44-67"
            ],
            [
                "name_tm"=> "Mynasyp",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "4",
                "description_rus"=> "Дом моды @mynasyp.fashion - золотой партнёр бизнес-каталога @barde.biz\nВ первую очередь, @mynasyp.fashion - это пространство для работы дизайнеров одежды, портных. Именно здесь создаётся превосходная одежда с учетом всех индивидуальных особенностей и вкусов.\nВ @mynasyp.fashion создаются роскошные вещи, которые требуют высочайшего художественного мастерства. Ваша одежда приобретёт изысканность и изящность, проходя через руки умелых швей.",
                "description_tm"=> "Moda öýi @mynasyp.fashion @barde.biz biznes katalogynyň altyn hyzmatdaşy\nIlki bilen @mynasyp.fashion geýim- gejim dizaýnerleriniň we tikinçileriniň işlemegi üçin giňişlikdir. Ilki bilen bu ýerde her müşderiniñ iñ içgin pikir edilen islegleri we aýratynlyklary göz öñünde tutulyp ajaýyp eşikler döredilýär.\n@mynasyp.fashion iň ýokary çeperçilik ukybyny talap edýän kaşaň geýimleri döredýär. Egin-eşikleriňiz ussat tikinçileriň elinden geçip, çylşyrymlylyga we nepislige eýe bolýar.\n@mynasyp.fashion\nmynasypfashion@gmail.com,+99364071606",
                "instagram"=> "mynasyp.fashion",
                "phone"=> "+99364071606",
                "email"=> "mynasypfashion@gmail.com"
            ],
            [
                "name_tm"=> "Jennet Mulki",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "7",
                "description_rus"=> "Агенство недвижимости Jennet mülki - золотой партнёр бизнес-каталога @barde.biz\nJennet mülki осуществляют любые операции с недвижимостью=> риэлторских услуги, аренда, работаем с недвижимостью физических и юридических лиц.\nСотрудничество с агенством Jennet mülki даёт вам дополнительные преимущества=> \n✔️ Покупка и продажа недвижимости в короткие сроки\n✔️ Покупка недвижимости за доступную цену\n✔️ Большая база данных на недвижимость с множеством вариантов\nНе упустите свой шанс! ",
                "description_tm"=> "7 gullugy Jennet mülki @barde.biz biznes katalogynyň altyn hyzmatdaşy\nJennet mülki gozgalmaýan emläk amallaryny amala aşyrýar=> gozgalmaýan emläk Hyzmatlary, kärende tölegi ýaly Hyzmatlary hödürleýär. Bu kärhana gozgalmaýan emläk we şahsy taraplar bilen işleşýär.\nJennet mülki agentligi bilen hyzmatdaşlyk size goşmaça peýdalary berýär=>\n✓ Gozgalmaýan emläk satyn almak we satmak\n✓ Gozgalmaýan emläkleri elýeterli bahadan satyn almak\n✓ Köp görnüşli uly emläk bazasy\nMümkinçiligiňizi elden gidirmäň!,+99362575799,+99362818318\n 50 52 24",
                "phone"=> "+99362575799, +99362818318, 50 52 24"
            ],
            [
                "name_tm"=> "Rysgal",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "11",
                "description_rus"=> "Хозяйственное общество @rysgal_mebel - золотой партнёр бизнес-каталога @barde.biz\nВ мебельном магазине @rysgal_mebel вы можете приобрести качественную мебель от известных мировых производителей. Широкий ассортимент товаров позволяет выбрать мебель именно того стиля, который вы ищите. \nПреимущества @rysgal_mebel=>\n* Широкий ассортимент товаров;\n* Практичность – они предлагают только качественные товары;\n* Большой ассортимент товаров, который регулярно обновляется;\n* У них работает служба доставки, а также имеются мастера, которые соберут мебель у вас дома;\n* Приемлемые цены – не смотря на то, что у них товары высокого качества, их стоимость вас приятно удивит;\n* Квалифицированные сотрудники -  менеджеры дадут вам полную информацию о товаре, а также помогут подобрать мебель с учетом вашего интерьера. ",
                "description_tm"=> "“Rysgal mebel” @rysgal_mebel hojalyk jemgyýet, @barde.biz biznes katalogynyň altyn hyzmatdaşy\n@rysgal_mebel mebel dükanynda dünýä belli öndürijilerden ýokary hilli mebel satyn alyp bilersiňiz. Önümleriň giň görnüşi gözleýän stiliňiziň mebellerini saýlamaga mümkinçilik berýär.\n@Rysgal_mebel-iň peýdaly taraplary=>\n* Harytlaryň giň görnüşi;\n* Mebelleriñ berkligi- diňe ýokary hilli önümleri hödürlenýär.\n* Yzygiderli täzelenýän harytlaryň uly görnüşi;\n* Eltip bermek hyzmaty we öýüňizde mebel gurnap berýän hünärmenleri hem öz içine alýar.\n* Amatly bahalar - ýokary hilli harytlaryň bardygyna garamazdan, bahalary sizi geň galdyrar;\n* Ökde hünärmenler önüm hakda doly maglumat bererler, şeýle hem içerki önümleriňize laýyk mebel saýlamaga kömek ederler.\n@rysgal_mebel\nrysgalmebel.com,+993 12 76 19 52\ninfo@rysgalmebel.com",
                "instagram"=> "rysgal_mebel",
                "phone"=> "+993 12 76 19 52",
                "website"=>"rysgalmebel.cominfo, rysgalmebel.com"
            ],
            [
                "name_tm"=> "Zeppelin",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "12",
                "description_rus"=> "Хозяйственное общество «Цеппелин Туркменистан» - золотой партнёр бизнес-каталога @barde.biz\nКомпания ХО «Цеппелин Туркменистан» успешно работает на туркменском рынке в течение 13-и лет. Они являются официальным дилером Caterpillar® – ведущего мирового производителя спецтехники в Республике Туркменистан.\nИх основной профиль работы - Продажа спецтехники. Они предлагают широкий ряд новых машин под маркой Cat®, технику с Cat с наработкой\nОсновные наименования поставляемой ими техники=>\n▪️ экскаваторы\n▪️ погрузчики\n▪️ самосвалы\n▪️ бульдозеры\n▪️ трубоукладчики\n▪️ скреперы\n▪️ автогрейдеры\n▪️ катки\n▪️ дорожные фрезы\n▪️ асфальтоукладчики\nОни работают на ваш успех! ",
                "description_tm"=> "\"Zeppelin Türkmenistan\"hojalyk jemgyýeti @barde.biz biznes katalogynyň altyn hyzmatdaşy \n“Zeppelin Türkmenistan” 13 ýyl bäri türkmen bazarynda üstünlikli öz işini amala aşyrýar. Türkmenistan Respublikasynda ýörite enjamlary öndürýän dünýäde öňdebaryjy “Caterpillar®” -yň resmi dileri.\nIşleriniň esasy ugry - spestehniki enjamlary satmak. Täze “Cat®” markaly maşynlaryň giň toplumyny hödürleýärler\nOlar bilen üpjün edilen enjamlaryň esasy atlary=>\n• ekskawatorlar\n• ýükleýjiler\n• ýük Awtoulaglary\n• buldozerler\n• turbalar\n• gyryjylar\n• motor bahalandyryjylary\n• rolikler\n• ýol kesijiler\n• asfalt tekizleyjiler\nSiziň üstünlikleriňiz üçin işleýärler!\nTürkmenistan, Aşgabat, 744001\nBitarap şaýoly Türkmenistan, 608,+993 (12) 37 90 90\ninfo.turkmenistan@zeppelin.com\nzeppelin.com",
                "address"=> "Туркменистан, г. Ашхабад, 744001\nпр. Битарап Туркменистан, 608,+993 (12) 37 90 90",
                "email"=> "info.turkmenistan@zeppelin.com",
                "website"=>"zeppelin.com"
            ],
            [
                "name_tm"=> "Owadan pursat",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "3",
                "description_rus"=> "Свадебный салон @owadanpursat_weddinghouse - золотой партнёр бизнес-каталога @barde.biz\nСтать настоящей королевой вечера вам поможет свадебный салон «Owadan Pursat». Многолетний опыт работы с невестами и женщинами помогает им подбирать наряды так, что любая дама выглядит в них безупречно.\nЗдесь вы найдёте свою мечту – платье, которое сядет по твоей фигуре, и сделает вас безусловно самой красивой. Выберите свой фасон, оттенок, аксессуары. А если вы  пока не определились с большим выбором ,  консультанты учтут все ваши  пожелания и всегда помогут с выбором.\nДля них очень важно, чтобы в День свадьбы невеста выглядела сказочно красивой и в полной мере осознавала свою неотразимость.\nТакже они занимаются организацией и оформлением любых видов торжеств.\nВсё лучшее для вас! 🤍",
                "description_tm"=> "Toý salony @owadanpursat_weddinghouse @barde.biz biznes katalogynyň altyn hyzmatdaşy\nOwadan Pursat toý salony, agşamyň hakyky şa zenany bolmaga kömek eder. Gyz-gelinler bilen işlemek boýunça köp ýyllyk tejribe, islendik aýal-gyzlara ajaýyp görünmegi üçin eşikleri saýlamaga kömek eder.\nBu ýerde siz öz arzuwyňyzy taparsyňyz - şekiliňe laýyk gelýän we şertsiz iň owadan köýnekler. Mundan başga-da öz stiliňize görä saç bezeglerini saýlaň. Eger-de siz entek belli bir karara gelmedik bolsaňyz, hünärmen gyz-gelinler ähli islegleriňizi göz öňünde tutyp belli bir keşbi saýlamaga kömek ederler.\nToý güni her bir gelin ajaýyp we owadan görünmegi üçin, bu ýerde işleýän hünärmenler kömek ederler.\nŞeýle hem, toý salony her dürli dabaralary gurnaýarlar we dizaýn edýärler.\nIñ gowy zatlar diñe siziň üçin!❤️\n@owadanpursat_weddinghouse,+993 65 502090,+993 61 777171\n Çehow köç, \"Bagt ýoly\"restorany",
                "address"=> "Ул. Чехова, ресторан «Bagt ýoly»",
                "instagram"=> "owadanpursat_weddinghouse",
                "phone"=> "+993 65 502090,+993 61 777171"
            ],
            [
                "name_tm"=> "Pak Emlak",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "7",
                "description_rus"=> "Индивидуальное предприятие @pak_emlak_hk - золотой партнёр бизнес-каталога @barde.biz\nАгентство недвижимости @pak_emlak_hk \nосуществляет операции с недвижимостью - предоставляет услуги физическим и юридическим лицам по купле-продаже и аренде жилой, коммерческой и загородной недвижимости в городе Ашхабад и Туркменбаши.\nПочему именно @pak_emlak_hk ? \n🔶 Команда грамотных специалистов \n🔶 Простые и понятные договоры в полном соответствии с законом\n🔶 Гибкая стоимость услуг с учётом ваших пожеланий\n🔶 Контроль за ходом каждой сделки \nКоманда Päk Emläk всегда готова предоставить консультации по вышеуказанным видам деятельности, а так же предложить клиентам интересные и актуальные предложения по выбору недвижимости.",
                "description_tm"=> "pak_emlak_hk hususy kärhanasy @barde.biz biznes katalogynyň altyn hyzmatdaşy\nGozgalmaýan emläk gullugy @pak_emlak_hk\ngozgalmaýan emläk amallary amala aşyrýar - Aşgabat we Türkmenbaşy şäherindäki ýaşaýyş, täjirçilik we şäher ýakasyndaky gozgalmaýan emläkleri satmak we kärendesine bermek üçin şahsy we edara görnüşli taraplara Hyzmatlary hödürleýär.\nNäme üçin @pak_emlak_hk?\n🔶Ygtyýarly hünärmenler topary\n🔶Kanuna doly laýyk gelýän ýönekeý we düşnükli şertnamalar\n🔶Islegleriňize görä Hyzmatlaryň çeýe bahasy\n🔶 Her şertnamanyñ gelişi we gidişine gözegçilik etmek\nPäk Emläk topary ýokardaky işler barada maslahat bermäge, müşderilere gozgalmaýan emläk saýlamak üçin gyzykly we degişli teklipleri hödürlemäge hemişe taýýardyr.\nAşgabat, Taslama köçesi, 32-nji jaý,90-43-26 90-43-28,90-43-27 90-43-29\n64-06-57 60-25-87\nTürkmenbaşy şäheri, 6-njy mekdebiň ýanyndaky \"Kenar\"bazary,+993 (61) 98-66-08,+993 (64) 92-34-81",
                "address"=> "Г. Ашхабад , ул. Таслама, дом 32 Г. Туркменбаши, «Кенар» базар со стороны школы N 6",
                "phone"=> "90-43-26,90-43-28,90-43-27,90-43-29,64-06-57,60-25-87,+993,(61) 98-66-08,+993 (64) 92-34-81"
            ],
            [
                "name_tm"=> "Ingco",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "12",
                "description_rus"=> "Бренд электроинструментов @ingco_tools_turkmenistan - золотой партнёр бизнес-каталога @barde.biz\nКомпания @ingco_tools_turkmenistan предлагает покупателям широкий ассортимент современного электроинструмента по доступным ценам инструментов для бытового и\nпрофессионального использования.\n✅ Вся продукция INGCO сертифицирована по международным стандартам и обеспечивается гарантией производителя.\n✅Миссия компании INGCO - производить качественный и удобный в использовании инструмент по доступной цене. ",
                "description_tm"=> "Elektro gurallary markasy @ingco_tools_turkmenistan @barde.biz biznes katalogynyň altyn hyzmatdaşydyr\n@ingco_tools_turkmenistan müşderilere öý hojalygy üçin elýeterli bahalardan döwrebap elektro gurallarynyň giň toplumyny hödürleýär.\n✅ INGCO önümleriniň hemmesi halkara ülňülerine laýyklykda kepillendirilýär we öndürijiniň kepilligi bilen üpjün edilýär.\n✅INGCO- yñ esasy wezipesi, ýokary hilli we elýeterli bahadan gurallaryñ köp görnüşini öndürmek.\n@ingco_tools_turkmenistan,+993 65 53 86 44\nAşgabat, G.Kuliýewa köç, \"Peýkam\"binasy",
                "address"=> "г. Ашхабад, ул. Г. Кулиева, «Peýkam» здание",
                "phone"=> "+993 65 53 86 44"
            ],
            [
                "name_tm"=> "Lion Wings",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "10",
                "description_rus"=> "Официальный представитель бренда Японии @lion_wings_turkmenistan - золотой партнёр бизнес-каталога @barde.biz\nLION — один из лидеров японской косметической индустрии и марка № 1 бытовой химии и средств по уходу за полостью рта на внутреннем рынке Японии. Эта марка широко известна по всему миру, а теперь и в Туркменистане! \nLion обеспечивает клиентов безопасными качественными продуктами и услугами, которые поддерживают здоровый и комфортный образ жизни.\nОни представляют вашему вниманию следующие товары=>\n💎 Зубные пасты\n💎 Зубные щетки\n💎 Мыла\n💎 Моющие средства\n💎 Средства по ухожу за волосами и кожей \nИ многое другое \nПроизводство=> Япония, Малайзия, Индонезия, Таиланд\nВсё самое лучшее для вас! ",
                "description_tm"=> "Lion_wings_turkmenistan Ýaponiýanyñ belli markasynyň resmi wekili @barde.biz biznes katalogynyň altyn hyzmatdaşy\nLION Ýaponiýanyň iñ öñdebaryjy kosmetika we öý himiki serişdeleri öndüriji markasy bolup, Ýaponiýanyň içerki bazarynda 1-nji ýerde durýar. Bu marka bütin dünýäde, indi bolsa Türkmenistanda giňden tanalýar!\nLion müşderilere sagdyn we amatly durmuş ýörelgesini goldaýan ygtybarly, ýokary hilli önümler we Hyzmatlar bilen üpjün edýär.\nSize aşakdaky önümleri hödürleýärler=>\n💎Diş pastalary\n💎 Diş çotgalary\n💎 Sabyn\n💎 Kir ýuwujy serişdeler\n💎 Saç we derini bejermek önümleri\nWe başga-da köp zatlar.\nÖndürilýän ýeri=> Ýapanaponiýa, Malaýziýa, Indoneziýa, Taýland\nIň gowy zatlar siz üçin!"
            ],
            [
                "name_tm"=> "Ylhamly ish",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "7",
                "description_rus"=> "Агентство недвижимости “Ylhamly iş” @kupidom_buzmein - золотой партнёр бизнес-каталога @barde.biz\n“Ylhamly iş” - высококвалифицированная компания на рынке недвижимости Туркменистана, которая поможет подобрать квартиру, дом, коттедж, помещение под офис по вашим финансовым возможностям или выгодно продать вашу недвижимость с юридическим оформлением всех необходимых для этого документов.\n“Ylhamly iş” предлагают такие услуги, как =>\n- купля-продажа любой недвижимости\n- оформление документов любой сложности\n- бесплатная консультация \n- с нами безопасно, надёжно и быстро \nЛучший путь к жизни…",
                "description_tm"=> "7 gullugy “Ylhamly iş” @kupidom_buzmein @barde.biz biznes katalogynyň altyn hyzmatdaşy\n“Ylhamly iş” Türkmenistanyň gozgalmaýan emläk bazaryndaky ýokary hünärli kompaniýa bolup, maliýe mümkinçilikleriňize görä kwartira, jaý, kottej, ofis ýerini saýlamaga hem-de ähli zerur resminamalaryň kanuna laýyklykda ýerine ýetirilmegi bilen emlägiňizi girdejili satmaga kömek eder.\n“Ylhamly iş” şu aşakdaky Hyzmatlary hödürleýär=>\n- islendik gozgalmaýan emläk satyn almak we satmak\n- islendik çylşyrymly resminamalary taýýarlamak\n- mugt maslahat\n- biziň bilen howpsuz, ygtybarly we çalt\nÝaşamagyň iň gowy usuly ...\n@kupidom_buzmein,+993 64 646472,+993 65 628953\nimo +993 65 820019\n☎️ 33 53 67\n14 75 77",
                "instagram"=> "kupidom_buzmein",
                "phone"=> "+993 64 646472,+993 65 628953,+993 65 820019,33 53 67,14 75 77"
            ],
            [
                "name_tm"=> "Dort tarap logistika",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "8",
                "description_rus"=> "Транспортно-экспедиционная компания “Dört tarap logistika” @4_tarap - золотой партнёр бизнес-каталога @barde.biz \n“Dört tarap logistika” - одна из самых современных экспедиторский компаний Туркменистана.\nОни занимаются грузоперевозками любой сложности и в любых точках мира. И делают они это максимально выгодно и быстро для вас! \nУ компании “Dört tarap logistika” есть две конкретные цели=> \n✅ долгосрочное и плодотворное сотрудничество с клиентами и партнёрами\n✅вклад в развитие транспортно-логистической сферы нашего региона и всего мира\nС “Dört tarap logistika” нет ничего невозможного и нет недоступных стран.\nСнимем груз с ваших плеч!",
                "description_tm"=> "Ulag ekspeditorçylyk kompaniýasy \"Dört tarap logistika\"4_tarap, @barde.biz biznes katalogynyň altyn hyzmatdaşydyr\n\"Dört tarap logistika\"Türkmenistanda iň döwrebap ekspeditor kompaniýalarynyň biridir.\nBu kompaniýa islendik çylşyrymlykda we dünýäniň islendik ýerine ýük daşamak bilen meşgullanýar. Olar muny siziň üçin iň girdejili we çalt usulda ederler!\nDört tarap logistikanyň iki aýratyn maksady bar=>\n✅müşderiler we hyzmatdaşlar bilen uzak möhletli we netijeli hyzmatdaşlyk\n✅sebitimizde we bütin dünýäde ulag we logistika pudagynyň ösüşine goşant goşmak\n\"Dört tarap logistika\"bilen ähli zatlar mümkin we elýetersiz ýurtlar ýok!\nGeliň, ýüküňizi egniňizden aýyralyň!\n@4_tarap\n\"SPORT\"söwda merkezi, Olimpiýa şäherçesi, 7-nji bina, 4-nji gat\nAşgabat, Türkmenistan,+993 12 460121,+993 65 557261\ndtlogistics-tm.com\ninfo@dtlogistics-tm.com",
                "address"=> "Бизнес-центр «СПОРТ», Олимпийский городок, здание 7, 4 этаж\nАшхабад, Туркменистан",
                "instagram"=> "4_tarap",
                "phone"=> "+993 12 460121,+993 65 557261",
                "email"=> "info@dtlogistics-tm.com",
                "website"=>"dtlogistics-tm.com"
            ],
            [
                "name_tm"=> "Borjomi",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "10",
                "description_rus"=> "Бренды минеральных вод @borjomi_turkmenistan и @essentuku_turkmenistan - золотые партнёры бизнес-каталога @barde.biz\nСимвол Грузии и знаменитая на весь мир минеральная вода «Боржоми» – уникальное природное лекарство, уже более двух веков используемое для лечения заболеваний пищеварительной, эндокринной, нервной и сердечно-сосудистой систем, а также органов дыхания, почек и опорно-двигательного аппарата.\n«Живая вода, живая легенда»\n@borjomi_turkmenistan,+993 12 463787\nЛегендарная минеральная вода «Ессентуки» уже около 200 лет используется в курортно- санаторных процедурах. Уникальный состав минералов и особенности формирования воды в недрах Кавказских гор обуславливают узнаваемый вкус воды, широкий спектр благоприятного воздействия на организм и лечебный эффект, доказанный многими поколениями врачей.\n«Времена меняются, легенда продолжается»",
                "description_tm"=> "Mineral suw markalary @borjomi_turkmenistan we @essentuku_turkmenistan @barde.biz biznes katalogynyň altyn hyzmatdaşlarydyr\nGruziýanyñ nyşany we dünýä belli Borjomi mineral suwy endokrin, nerw we ýürek-damar ulgamlarynyň, şeýle hem dem alyş, böwrek we muskul-ulgam ulgamlarynyň kesellerini bejermekde iki asyrdan gowrak wagt bäri ulanylýan özboluşly tebigy derman bolup hyzmat edÿär.\n\"Janly suw, janly rowaýat\"\n@borjomi_turkmenistan,+993 12 463787\nRowaýata öwrülen Essentuki mineral suwy, takmynan 200 ýyl bäri şypahanada saglygy dikeltmekde ulanylýar. Minerallaryň özboluşly düzümi we Kawkaz daglarynyň güýji suw emele geliş aýratynlyklary, suwuň tagamyny, bedene peýdaly täsirleriň köpüsini we ençeme asyrlaryñ dowamynda lukmanlar tarapyndan subut edilen bejeriş täsirini kesgitleýär.\n\n\"Döwür üýtgeýär, rowaýat dowam edýär\"\n@essentuku_turkmenistan,+993 65 726475",
                "instagram"=> "borjomi_turkmenistan, essentuku_turkmenistan",
                "phone"=> "+993 65 726475"
            ],
            [
                "name_tm"=> "Burgut Bezegi",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "9",
                "description_rus"=> "Студия дизайна интерьера @burgut.bezegi - золотой партнёр бизнес-каталога @barde.biz\nСтудия дизайна @burgut.bezegi работает над созданием комплексного дизайна интерьеров от макета до ремонта разной сложности и объемов.\nВсе этапы работы над дизайн-проектом продуманы таким образом, чтобы  клиенту было просто понимать и согласовывать каждый этап для дальнейшей реализации проекта.\n- Дизайн студия интерьера и экстерьера\n- Ландшафтный дизайн и фитодизайн\n- Декор для дома и терассы\n- Web дизайн и 2D - 3D дизайн\n- SMM рассылка (1 месяц бесплатно)\n- Дизайн и производство всех видов рекламы\n- Дизайн и производство всех видов полиграфической продукции                                                                                 Тел=> +99364216472 +99365456571",
                "description_tm"=> "Interýer dizaýn studiýasy @burgut.bezegi @barde.biz biznes katalogynyň altyn hyzmatdaşy\nDizaýn studiýasy @burgut.bezegi dürli çylşyrymlykdaky we kynçylykdaky ýerleri maketdan başlap taýyn dizaýny döretmegiň üstünde işleýärler.\nDizaýn taslamasynyň üstünde işlemegiň ähli basgançaklary, müşderiniň taslamany mundan beýläk-de durmuşa geçirmek üçin her tapgyra düşünmegi we ylalaşmagy aňsat bolar ýaly pikir edilýär.\n- Içki we daşarky dizaýn studiýasy \n- Landaşft we fitodizaýn\n- Öý we eýwan bezegleri\n- Web dizaýny we 2D - 3D dizaýny\n- SMM poçta bilen ibermek (1aý mugt)\n- Mahabatyň ähli görnüşlerini dizaýn etmek we öndürmek\n- Çap önümleriniň ähli görnüşlerini dizaýn etmek we öndürmek\n@burgut.bezegi,+993 61 390420,+993 61 390423\nA.Niýazow şaýoly, 118\nburgutdesign.com.tm\ninfo.burgutdesign.com.tm",
                "address"=> "Проспект А. Ниязова, 118",
                "instagram"=> "burgut.bezegi",
                "phone"=> "+99364216472,+99365456571",
                "email"=> "info.burgutdesign.com.tm",
                "website"=>"burgutdesign.com.tm"
            ],
            [
                "name_tm"=> "Owadan gelin",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "3",
                "description_rus"=> "Свадебный дом @owadangelin_wedding - золотой партнёр бизнес-каталога @barde.biz\nЧтобы невеста была полностью удовлетворена, важно найти свадебный салон, соответствующий ее чувству стиля и красоты.\nСвадебный салон «Owadan gelin» создан для невест, которые ищут что-то оригинальное и уникальное.\nЗдесь готовы удовлетворить запросы каждой невесты. Консультанты выслушают все ваши пожелания и помогут подобрать наряд, в котором вы будете чувствовать себя единственной и неповторимой в этот незабываемый для вас день.\nВ свадебном салоне @owadangelin_wedding вам подберут именно то платье, которое Вы так долго искали. Оригинальный стиль и дизайн предлагаемых платьев создадут основу вашего образа, который не будет похож на другие. \n«Owadan Gelin» к вашим услугам! ",
                "address"=> "📍Ашхабад, 15 этап, ул. Сейди, “Bedew” 1 этаж\n📍Ашхабад, ул. Огуз хана (Айтакова), 109 дом, «Toý hyzmat» здание, магазин 4А, 5А, 9А",
                "instagram"=> "owadangelin_wedding",
                "phone"=> "+993 62 048814, +993 63 934211"
            ],
            [
                "name_tm"=> "Gold and Diamond house",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "4",
                "description_rus"=> "Магазин ювелирных украшений @goldanddiamondhouse - золотой партнёр бизнес-каталога @barde.biz\nЛюбая женщина обрадуется, если в качестве подарка получит драгоценное украшение, будь то серьги или кольца, несмотря на то, что ее шкатулка уже полна.\nПриобрести изящные ювелирные украшения вы можете в @goldanddiamondhouse. Здесь представлено огромное количество великолепных изделий на любой вкус.\nКомплекты этого ювелирного бутика без «возраста» и жёстких рамок. Они смотрятся очень женственно и утончённо, и подойдут к любому образу.\nНу а как красиво бриллианты переливаются на солнце, глаз не оторвёшь! \nПодчеркни свою красоту с @goldanddiamondhouse ! ",
                "instagram"=> "goldanddiamondhouse",
                "phone"=> "+993 64 60 30 95"
            ],
            [
                "name_tm"=> "Chorekchi",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "1",
                "description_rus"=> "Хлебобулочная @chorekchi_tm - золотой партнёр бизнес-каталога @barde.biz\nПекарня @chorekchi_tm предлагает вам хлебобулочные и кондитерские изделия высшего сорта.\nЗдесь всегда встретят клиента с приветливой улыбкой и предложат самые свежие и ароматные сдобные вкусности=> хлеб с хрустящей корочкой, слойки и булочки на любой вкус, большой выбор пирожных и тортов. Любители выпечки  не уйдут отсюда голодными. А ещё здесь большой выбор кофейных напитков.",
                "address"=> "📍11 мкр., ул. Баба Аннанова (Котовского)📍Дом быта «Gunça»",
                "instagram"=> "chorekchi_tm",
                "phone"=> "+993 61 006363, +993 61 057676, +993 62 101011"
            ],
            [
                "name_tm"=> "Icon ",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "4",
                "description_rus"=> "Бутик одежды @icon__tm - золотой партнёр бизнес-каталога @barde.biz\nВ данном магазине представлен большой выбор женских пальто, обуви и аксессуаров на любой вкус по приятным ценам. \nНичто так не украшает девушку как новое пальто. У каждой женщины, которая хочет хорошо выглядеть, найдется в гардеробе пальто. Это может быть пальто из любых сочетаний шерсти, либо плащевое пальто с различным утеплителем. Весной и осенью носят при хорошей солнечной погоде легкое пальто без утеплителя\nЖенские сумки - очень красивые аксессуары, которые предназначены для праздничной и ежедневной носки. Они отличаются друг от друга формой, цветом, наличием или отсутствием дополнительных украшений, стилем.\nКаждая сумочка обязательно качественная, красивая, модная.",
                "description_tm"=> "Egin-eşik butigi @icon__tm @barde.biz biznes katalogynyň altyn hyzmatdaşy\nBu dükan, her bir gyz-gelinleriñ islegi boýunça paltolary, aýakgaplary we dürli esbaplary hödürleýär.\nHiç bir zat gyz-gelinleri täze palto ýaly bezänok. Gowy görünmek isleýän her bir aýalyň şkafynda hökmany suratda kaşañ palto bardyr. Ol ýüňüň islendik kombinasiýasynda şeýle hem dürli howanyñ sowugyna baglylykda paltolaryñ dürli görnüşlerini hödürleýär. Şeýle hem güýzde, gowy güneşli howada geýmek üçin ýeňil paltolar, plaşlar hem bar. \nGyz-gelinlere baýramçylyk we gündelik eşikler üçin niýetlenen gaty owadan esbaplar, köwüşler, ýan torbalar, siziň her bir stiliňize goşmaça bezeg berer.\n  \nHer bir bezeg berýän ýan torbalar ýokary hili we tapawutlanýan dizaýynda öndürilen.\n@icon_tm,+993 65 09 52 52,+993 64 01 45 55\n📍14-nji tapgyr, “Gara Altyn”, 1-nji gat\n📍\"Garaşsyzlygyň 15 ýyllygy\"söwda merkezi, 261 dükan",
                "address"=> "14 этап , “Gara Altyn”, 1 этаж\nТорговый центр «15 лет независимости», 261 магазин ",
                "instagram"=> "icon__tm",
                "phone"=> "+993 65 09 52 52,+993 64 01 45 55"
            ],
            [
                "name_tm"=> "Tolkun",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "10",
                "description_rus"=> "Хозяйственное общество «Ýakymly kümüş suwy» - золотой партнёр бизнес-каталога @barde.biz\nХозяйственное общество «Ýakymly kümüş suwy» - одно из ведущих предприятий Туркменистана по производству очищенной питьевой воды и безалкогольных напитков.\nПри поддержке государства предприятие стремится внести свой вклад в экспортный потенциал страны, предлагая свою продукцию на внешних рынках.\n«Tolkun» выпускают более 100 наименований безалкогольных напитков и питьевой воды. Данные напитки соответствуют мировым стандартам и имеют высокое качество по результатам лабораторных испытаний.",
                "description_tm"=> "\"Ýakymly kümüş suwy\"hojalyk jemgyýeti @barde.biz biznes katalogynyň altyn hyzmatdaşy\n \"Ýakymly kümüş suwy\"hojalyk jemgyýeti arassalanan agyz suwy we alkogolsyz içgiler öndürmek boýunça Türkmenistanda öňdebaryjy kärhanalaryñ biridir.\nDöwletiň goldawy bilen kompaniýa önümlerini daşary bazarlara hödürläp, ýurduň eksport potensialyna goşant goşmaga synanyşýar.\nTolkun 100-den gowrak alkogolsyz içgiler we agyz suwy öndürýär. Bu içgiler ýokary hilli, halkara ülňülerine laýyk gelip we laboratoriýa synaglarynyň netijelerine gabat gelýär.\n@tolkun.tm\ntolkun.tm\n66-52-52",
                "instagram"=> "tolkun.tm",
                "website"=> "tolkun.tm",
                "phone"=> "66-52-52"
            ],
            [
                "name_tm"=> "Turkmen senet",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "5",
                "description_rus"=> "Хозяйственное общество “Türkmen senet” - золотой партнёр бизнес-каталога @barde.biz\nХозяйственное общество «Туркмен сенет» первый в Туркменистане производитель материала Спанбонд. Это фильерный нетканый материал на высококачественном оборудовании, соответствующем международным, мировым стандартам.\nСпанбонд широко используется в медицинской отрасли для одноразовых изделий=> маски, халаты, комбинезоны, бахилы, шапки и многое другое.\nГлавные особенности=>\n✅ От 15 до 140 грамм \nПроизводство спанбонда толщиной 15-140 грамм на см2\n✅ Множество цветов\nВ производстве есть спанбонд синего, черного, белого, серого, коричневого, оранжевого, желтого цветов.\n✅ Контроль качества\nПроходит проходит несколько этапов контроля качества.",
                "description_tm"=> "\"Türkmen senet\"hojalyk jemgyýeti @barde.biz biznes katalogynyň altyn hyzmatdaşy\n \"Türkmen seneti\"hojalyk jemgyýeti Türkmenistanda Spanbond materiallary ilkinji öndürijileriñ biridir. Bu egrilen dokalmadyk mata halkara dünýä ülňülerine laýyk gelýän ýokary hilli enjamlarda dokalandyr. \nSpanbond lukmançylyk pudagynda ulanylýan önümler üçin giňden ulanylýar=> maskalar, köýnekler, geýimler, aýakgap örtükleri, şlýapalar we ş.m.\nEsasy aýratynlyklary=>\n✅ 15-den 140 grama çenli\nBir sm2 galyňlygy 15-140 gram bolan egriji önüm öndürmek\n✅ Reňk köpdürligi\nÖnümçilikde gök, gara, ak, çal, goňur, mämişi, sary reňkler bolýar.\n✅ Hil gözegçiligi\nHil gözegçiliginiň birnäçe tapgyryndan geçýär.\n@turkmen_senet\nturkmensenet.com.tm,+993 12 57 53 40,+993 12 57 53 35\ninfo@turkmensenet.com",
                "address"=> "Ахалский велаят, этрап Ак Бугдай, Промышленная зона, участок № 18 ",
                "instagram"=> "turkmen_senet",
                "website"=> "turkmensenet.com.tm",
                "phone"=> "+993 12 57 53 40, +993 12 57 53 35"
            ],
            [
                "name_tm"=> "Bossan",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "11",
                "description_rus"=> "Современная концептуальная компания @bossan_concept - золотой партнёр бизнес-каталога @barde.biz\nBossan Concept представляет вашему вниманию удобную и стильную садовую мебель, садовые светильники, искусственные цветы, вазоны и многое другое.\nЗдесь вы найдете множество товаров для вашего двора, террас, веранд, беседки, а также всепогодную мебель для уличного хранения вещей, садовый декор и многое другое.\n@bossan_concept специализируется на мебели из искусственного ротанга.\nПродукты из ротанга имеют множество преимуществ=>\n🟢 создаёт стильный интерьер\n🟢 отдых становится очень удобным и здоровым\n🟢 легко держать в чистоте\n🟢 несмотря на низкий вес, мебель из ротанга устойчиво стоит на земле \n🟢 при правильном уходе мебель будет служить очень долго",
                "address"=> "ул. Молланепеса 27, 15-й этап, ТЦ «Dürdäneli»",
                "instagram"=> "bossan_concept",
                "phone"=> "+993 12 57 53 35"
            ],
            [
                "name_tm"=> "Hukuk dunyasi",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "9",
                "description_rus"=> "Юридическая компания “Hukuk dünýasi” - золотой партнёр бизнес-каталога @barde.biz\nЮридическая компания @hukukdunyasi_hj специализируется на оказании профессиональных юридических услуг на территории Туркменистана местным, иностранным и государственным компаниям, организациям и ведомствам.\nС момента своего создания юридическая компания “Hukuk dünýasi” завоевала репутацию надежного партнёра среди клиентов, концентрируя своё внимание на качестве и эффективности предоставляемых юридических услуг.\nСочетая богатый и многосторонний опыт работы, соблюдая приверженность букве закона и правовой этике, юристы задействованы в оказании консультаций по различным экономическим, коммерческим, торговым и инвестиционным проектам.",
                "description_tm"=> "Hususy hukuk kärhanasy “Hukuk dünýäsi” @barde.biz biznes katalogynyň altyn hyzmatdaşy\nHususy hukuk kärhanasy @hukukdunyasi_hj Türkmenistanda ýerli, daşary ýurt we döwlet kompaniýalaryna, guramalaryna we bölümlerine professional hukuk Hyzmatlaryny hödürlemekde ýöriteleşendir.\nDöredilen wagtyndan bäri \"Hukuk dünýäsi\"hususy hukuk kärhanasy berilýän hukuk Hyzmatlarynyň hiline we netijeliligine ünsi jemläp, müşderileriň arasynda ygtybarly hyzmatdaş hökmünde abraý gazandy.\nAklawçylaryñ köp ugurly iş tejribesini birleşdirip, kanun hatyna we hukuk etikasyna eýerip, dürli ykdysady, täjirçilik, söwda we maýa goýum taslamalary boýunça maslahat bermäge gatnaşýarlar.\n@hukukdunyasi_hj,+993 12 21-16-28,+993 12 21-16-30\ne-mail=> \nlaw@hukukdunyasy.com.tm\ninfo@hukukdunyasy.com.tm\nhukukdunyasy@gmail.com",
                "address"=> "Ул. Атамырат Ниязова, дом 174",
                "instagram"=> "hukukdunyasi_hj",
                "phone"=> "+993 12 21-16-28, +99312 21-16-30                       ",
                "email"=> "hukukdunyasy@gmail.com, info@hukukdunyasy.com.tm"
            ],
            [
                "name_tm"=> "Corsa365",
                "photo"=>1,
                "level"=> 4,
                "categories"=> "5",
                "description_rus"=> "Комплекс витаминов и минералов @corsa.365 - золотой партнёр бизнес каталога @barde.biz\n«Corsa» была разработана американскими учёными из компании Biotech Solutions. «Corsa» прошла все стадии исследований и имеет множество сертификаций.\nCorsa эффективно улучшает обмен веществ благодаря содержанию двух и трёхвалентного железа. Является первой помощью при диарее, отравлении и интоксикации.\n«Corsa» безопасна для детей, беременных, больных сахарным диабетом. Не накапливается в организме, не вызывает аллергических реакций и передозировки. Не раздражает кожу и слизистые оболочки.",
                "instagram"=> "corsa.365",
                "phone"=> "+90 535 944 49 15, +993 63 30-27-28"
            ]
        ];


        foreach ($partners as $partner) {
            $newPartner = new Partner();
            $newPartner->category_id = $partner["categories"];
            $newPartner->type_id = Type::inRandomOrder()->first()->id;
            $newPartner->sort_order = $partner["level"];
            $new_arr = array();
            if (isset($partner['name_tm'])) {
                $newPartner->name = $partner['name_tm'];
                $newPartner->name_ru = $partner['name_tm'];
            };
            if (isset($partner['description_rus'])) {
                $newPartner->description_ru = $partner['description_rus'];
            };
            if (isset($partner['description_tm'])) {
                $newPartner->description = $partner['description_tm'];
            };
            $newPartner->save();
            // attach photo start
            Image::create([
                "name"=>$partner['name_tm'].".jpg",
                "partner_id"=>$newPartner->id
            ]);
            if (isset($partner['photo'])) {
                Image::create([
                    "name"=>$partner['name_tm']."2.jpg",
                    "partner_id"=>$newPartner->id
                ]);
            };
            // attach photo end 

            if (isset($partner['phone'])) {
                $new_arr = array_map('trim', explode(',', $partner['phone']));
                foreach ($new_arr as $phone) {
                    $newlink = new Link();
                    $newlink->partner_id = $newPartner->id;
                    $newlink->name = 'phone';
                    $newlink->link = $phone;
                    $newlink->save();
                }
            };
            if (isset($partner['instagram'])) {
                $new_arr = array_map('trim', explode(',', $partner['instagram']));
                foreach ($new_arr as $instagram) {

                    $newlink = new Link();
                    $newlink->partner_id = $newPartner->id;
                    $newlink->name = 'instagram';
                    $newlink->link = $instagram;
                    $newlink->save();
                }
            };
            if (isset($partner['email'])) {
                $new_arr = array_map('trim', explode(',', $partner['email']));
                foreach ($new_arr as $email) {
                    $newlink = new Link();
                    $newlink->partner_id = $newPartner->id;
                    $newlink->name = 'mail';
                    $newlink->link = $email;
                    $newlink->save();
                }
            };
            if (isset($partner['address'])) {
                $newlink = new Link();
                $newlink->partner_id = $newPartner->id;
                $newlink->name = 'map';
                $newlink->link = $partner['address'];
                $newlink->save();
            };
            if (isset($partner['website'])) {
                $new_arr = array_map('trim', explode(',', $partner['website']));
                foreach ($new_arr as $website) {
                    $newlink = new Link();
                    $newlink->partner_id = $newPartner->id;
                    $newlink->name = 'website';
                    $newlink->link = $website;
                    $newlink->save();
                }
            };
        }
    }
}
