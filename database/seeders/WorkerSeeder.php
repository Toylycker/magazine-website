<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Worker;
use App\Models\Link;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = [
            ['1.jpg', 'Maral Annanurowa', 'Марал Аннанурова', ' Türkmenistanda döredilen ilkinji we ýeke-täk PR agentligi "AkEnMar"-yň esaslandyryjysy “Bärde Biz” taslamasynyň awtory Italiýanyň “Desio” markasynyň reňkli kontaktlinzalaryny türkmen bazaryna hödürledi şonuň netijesinde meşhurlyga eýe boldy Üç dilde gürleýär Ilkinji gürleýär. Tik Tok prodýuser.', ' Генеральный директор первого и единственного PR-агентства“AkEnMar” Автор проекта “Bärde Biz. Тик Ток продюсер” Внедрила на туркменский рынок цветные контактные линзы итальянского бренда “Desio” благодаря чему и стала популярной В совершенстве владеет тремя языками', [
                'instagrams' => ['maraldezio']
            ]],
            ['2.jpg', 'Alişer Gulamow', 'Алишер Гуламов', 'Türkmenistanda TikTok marketingininiñ we ilkinji TikTok öýüniň esaslandyryjysy.Alişer Gulamow öňüni alyş diplomatiýa akademiýasyny tamamlap strategiki meýilnamalaşdyrylyş boýunça ýaş geňeşçileriň uçurymy Artist', 'Один из основателей TikTok маркетинга в Туркменистане Основатель первого TikTok дома Выпускник академии превентивной дипломатии Выпускник молодых советников по стратегическому планированию Артист', [
                'instagrams' => ['Alisher.gulamov']
            ]],
            ['3.jpg', 'Ramiliýa Ramazanowa', 'Рамиля Рамазанова', 'Baş direktoryň guramaçylyk işleri boýunça orunbasary Telekeçi Bloger-stilist Dört dilde gürleýär', 'Заместитель по организационным вопросам гендиректора Предприниматель Блогер Визажист-стилист Владеет четырьмя языками', [
                'instagrams' => ['ramazanova.ramilya']
            ]],
            ['5.jpg', 'Nazirita Habibowna', 'Назирита Хабибова', ' “AkEnMar"piar agentliginiň PR-menejeri bloger bäş çaganyň enesi.', 'PR-менеджер пиар компании “AkEnMar” Блогер Мать пятерых детей', [
                'instagrams' => ['nazirita_habibova']
            ]],
            ['6.jpg', 'Medina Igdirowa', 'Медина Игдырова', ' "AkEnMar" piar agentliginiň PR-menejeri SMM menejeri dört dilde erkin gürleýär Fotomodel. Pekin Jiaotong Uniwesitetinde Logistika menejment boýunça bakalawr derejesi bar. ', 'PR-менеджер “AkEnMar” SMM менеджер В совершенстве владеет четырьмя языками Фотомодель. Имеет степень бакалавра по логистическому менеджменту в Пекинском университете Цзяотун', [
                'instagrams' => ['Just_me_7727']
            ]],
            ['7.jpg', 'Akbýabek Nazarowa', 'Акбябек Назаровна', 'Ilkinji we ýeke-täk "AkEnMar" PR agentliginiň esaslandyryjysy “GM we SHK Ak Tam” HJ-niň esaslandyryjysy “Ak Tam Bazary” onlaýn söwda platformasynyň eýesi ES “TAU”-ny esaslandyryjy “Ak Enar” ES-niň esaslandyryjysy ', 'Основатель первого и единственного PR-агентства “AkEnMar” Учредитель ХО “КСМ и ПТ Ак Там” Собственник торговой онлайн-площадки “Ak Tam Bazary” Учредитель ХО “TAU” Учредитель ХО “Ak Enar” ', [
                'instagrams' => ['akbiabek']
            ]],
            ['8.jpg', 'Arslan Gulmammedow', 'Арслан Гулмаммедов', '“AkEnMar” PR agentliginiň aýdymçysy Arsi ady bilen tanalýan zehinli aýdymçy Aýdymçy Sowman', 'Артист PR-агентства “AkEnMar” Талантливый певец известен как Арси Деятель искусства Шоумен', [
                'instagrams' => ['arsigulmammedow']
            ]],
            ['9.jpg', 'Eneş Garryýewa', 'Энеш Гаррыева', 'Ilkinji we ýeke-täk "AkEnMar" PR agentliginiň esaslandyryjysy, BOSSAN CONCEPT dükanynyň esaslandyryjysy, Telekeçi marketolog ', 'Основатель первого и единственного PR-агентства “AkEnMar” Основатель сети BOSSAN CONCEPT Предприниматель Дипломированный маркетолог', [
                'instagrams' => ['bossan_concept']
            ]],
            ['10.jpg', 'Azat Meretgulyýew', 'Азат Меретгулыев', ' "AkEnMar" piar agentliginiň PR-menejeri GIPHY platformasynda ilkinji tassyklanan hünärmen, SMM menejer wideo montajçysy BarSU-nyň uçurymy (hukukçy)', 'Первый верифицированный артист на платформе GIPHY SMM-специалист Видеомейкер Выпускник БарГУ (правовед / юрист)', [
                'instagrams' => ['meretgulyev24']
            ]],
            ['11.jpg', 'Gunça Ateýewa', 'Гунча Атаева', ' "AkEnMar" agentliginiň PR-menejeri. Üç çaganyň enesi, aýfonagrafiýa we SMM bilen meşgullanýar', 'PR-менеджер “AkEnMar” Мать троих детей Практикует айфонографию и SMM', [
                'instagrams' => ['guncha2112']
            ]],
            // ['12.jpg', 'Jennet Sarybaýewa', 'Дженнет Сарыбаева', 'PR-menejer "Bärde Biz" "K-POP DANCE" tans toparyny esaslandyryjy Kepilnamaly ýolbaşçy Fotomodel Ynsan - sungat', 'PR-менеджер “Bärde Biz” Основатель танцевальной группы «K-POP DANCE» Сертифицированный Лидер Фотомодель Человек — искусство', [
            //     'instagrams' => ['baby__jenn_']
            // ]],
            ['13.jpg', 'Meňli Uwdyýewa', 'Менгли Увдыева', ' "AkEnMar" piar agentliginiñ grafik dizaýneri Gruziýanyň Amerikan Uniwersitetinde Dolandyryş boýunça bakalawr derejesi bar Sungat mekdebini tamamlady Angliýanyň “BLC” Braýton dil kollejini tamamlady', 'Графический дизайнер “AkEnMar” Имеет степень бакалавра по Менеджменту в Грузино-Американском университете Выпускник художественной школы Владеет 5 языками Окончила “BLC” Brighton Language College в Англии', [
                'instagrams' => ['itsmenli']
            ]],
            // ['14.jpg', 'Tamara Şarafýabi', 'Тамара Шарафьяби', 'PR-menejer "AkEnMar" SMM menejeri iPhoneograf 6 dilde gürleýär Fotomodel', 'PR-менеджер “AkEnMar” SMM-менеджер Айфонограф Владеет 6 языками Фотомодель', [
            //     'instagrams' => ['tara.aramat']
            // ]],
            // ['15.jpg', 'Genrih Gigil', 'Генрих Гигель', '“AkEnMar” PR bölüminiň müdiri Täze ugur dizaýneri Marketing hünärmeni (AIDA usuly)', 'Директор PR-отдела “AkEnMar” Дизайнер нового направления Специалист по маркетингу (техника AIDA)', [
            //     'instagrams' => ['genriiig']
            // ]],
            ['16.jpg', 'Merjen Tuşyýewa', 'Мерджен Тушуева', ' "AkEnMar" piar agentliginiň PR-menejeri Bloger-Tiktoker Türkmenistanda K-POP aýdym žanrynyň ilkinji lideri Kontenty bilen diňe bir ýurdumyzda däl eýsem Aziýa söýüjileriniñ arasynda uly meşhurlyga hem gazandy', 'PR-менеджер “AkEnMar” Блогер-тиктокер Первый предводитель K-POP в Туркменистане Своим контентом приносит не только позитив, но и поддержку в сторону любителей Азии Похожа на знаменитость', [
                'instagrams' => ['mera.clyde']
            ]],
            ['17.jpg', 'Mekan Myradow', 'Мекан Мурадов', ' "Bärde Biz" biznes kitapçasynyñ PR-menejeri Küşt boýunça sport magistriniñ Halkara ISO ülňüleri bilen meşgullanýar“Näme? Nirede? Haçan?” intellektual oýunlaryň muşdagy Nemes çeper eseri gowy görýär ', ' Кандидат мастера спорта по шахматам Занимается международными стандартами ISO Почитатель интеллектуальных игр, таких как “Что? Где? Когда?” Любитель немецкой художественной литературы', [
                'instagrams' => ['mekanmoore']
            ]],
            ['18.jpg', 'Baýram Beghanow', 'Байрам Бегханов', ' "AkEnMar" piar agentliginin PR-menejeri Sportçy Döredijilik bloger Fotomodel TikToker', 'PR-менеджер “AkEnMar” Спортсмен Креативный блогер Фотомодель ТикТокер', [
                'instagrams' => ['beghanovb']
            ]],
            ['19.jpg', 'Daýanç Esengulyýew', 'Даянч Эсенгулыев', 'PR-menejer "AkEnMar" Wideograf Redaktor Öndüriji Telewizor we kinematografçy', 'PR-менеджер “AkEnMar” Видеограф Монтажист Режиссёр Теле и кинооператор', [
                'instagrams' => ['dayanc_esengulyyew']
            ]],
            ['20.jpg', 'Aýna Bazarowa', 'Айна Базарова', 'AkEnMar ofis menejeri Arassalyk ertekisi Arassalaýjy menejer Iň lezzetli çaý taýýarlaýar', 'Офис-менеджер “AkEnMar” Фея чистоты Клининг-менеджер Готовит самый вкусный чай', [
                'instagrams' => [null]
            ]],
            ['21.jpg', 'Atajan Begjanow', 'Атаджан Бегджанов', 'Taslama dolandyryjysy "Bärde Biz" PR-menejeri "AkEnMar" Tertipli geofiziki-inžener', 'Руководитель проекта “Bärde Biz” PR-менеджер “AkEnMar” Дипломированный инженер-геофизик', [
                'instagrams' => ['atajanbegjan']
            ]],
            ['22.jpg', 'Maksim Kadyrow', 'Максим Кадыров', 'PR-menejeri "AkEnMar" Jemgyýetçilik işgäri Bloger Professional alyp baryjy; showman', 'PR-менеджер “AkEnMar” Публичная личность Блогер Профессиональный ведущий; шоумен', [
                'instagrams' => ['Maxim_kadyrov']
            ]],
            ['23.jpg', 'Maryam Sarybaýewa', 'Айна Дурдыева', '"AkEnMar"agentliginiň PR-menejeri "Bärde Biz" redaksiýasynyň baş menejeri Nebit we gaz çykaryjy operator-hünärmen', 'PR-менеджер “АкЭнМар”, Главный менеджер редакции журнала "Bärde Biz", Специалист-оператор по добычи нефти и газа.', [
                'instagrams' => ['maryamsarybayeva']
            ]],
            ['24.jpg', 'Aýna Durdyýewa ', 'Марьям Сарыбаева', '"AkEnMar" piar agentliginiñ PR-menejeri,źurnalisty we terjimeçisi. "Bardebiz" biznes katalogynyň 2-nji sanyndaky makalalaryñ awtory. TDMI- iñ uçurymy. Instagramdaky tm.business.group biznes akauntyñ ýolbaşçysy. SMM menejer.', 'PR-менеджер «АкЭнМар», журналист и переводчик PR-агентства «АкЭнМар». Автор статей во 2-м номере бизнес каталога «Bardebiz» Выпускник TDMI. Менеджер бизнес-аккаунта tm.business.group в InstagramSMM-менеджер.",Специалист-оператор по добычи нефти и газа.', [
                'instagrams' => ['kakabaeva.anna']
            ]],
        ];

        foreach ($objects as $object) {
            $worker = new Worker();
            $worker->image = $object[0];
            $worker->name = $object[1];
            $worker->name_ru = $object[2];
            $worker->description = $object[3];
            $worker->description_ru = $object[4];
            $worker->save();
            foreach ($object[5]['instagrams'] as $link) {
                if ($link) {
                    $newlink = new Link();
                    $newlink->worker_id = $worker->id;
                    $newlink->name = 'instagram';
                    $newlink->sort_order = '1';
                    $newlink->link = $link;
                    $newlink->save();
                }
            }
        }
    }
}
