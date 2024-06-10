<?php

namespace App\Livewire\Debug;

use App\Models\Homecell;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.admin')]
class Wsf extends Component
{

    public function save()
    {
        $data = [
            [
                "address" => "#1 Afam Street",
                "title" => "#1 Afam Street",
                "district_id" => 1,
                "province_id" => 1,
                "phone" => "07039593531",
                "about" => "David Nathaniel",
                "station_id" => 1
            ],
            [
                "address" => "#6 Afam Street",
                "title" => "#6 Afam Street",
                "district_id" => 1,
                "province_id" => 1,
                "phone" => "08030872285",
                "about" => "Mrs Justina G.",
                "station_id" => 1
            ],
            [
                "address" => "#9Afam street",
                "title" => "#9Afam street",
                "district_id" => 1,
                "province_id" => 1,
                "phone" => "08037444008",
                "about" => "Pascal FrancIs",
                "station_id" => 1
            ],
            [
                "address" => "#1 Afam Street",
                "title" => "#1 Afam Street",
                "district_id" => 1,
                "province_id" => 1,
                "phone" => "07039593531",
                "about" => "David Nathaniel",
                "station_id" => 1
            ],
            [
                "address" => "#3 Afam Street",
                "title" => "#3 Afam Street",
                "district_id" => 1,
                "province_id" => 1,
                "phone" => "08066623348",
                "about" => "Mrs imabone",
                "station_id" => 1
            ],
            [
                "address" => "#6 Afam Street",
                "title" => "#6 Afam Street",
                "district_id" => 1,
                "province_id" => 1,
                "phone" => "08030872285",
                "about" => "Mrs Justina G.",
                "station_id" => 1
            ],
            [
                "address" => "#9Afam street",
                "title" => "#9Afam street",
                "district_id" => 1,
                "province_id" => 1,
                "phone" => "08037444008",
                "about" => "Pascal Frances",
                "station_id" => 1
            ],
            [
                "address" => "#7 Afam Street",
                "title" => "#7 Afam Street",
                "district_id" => 1,
                "province_id" => 1,
                "phone" => "08037098505",
                "about" => "Mr Friday",
                "station_id" => 1
            ],
            [
                "address" => "#12 Afam Street",
                "title" => "#12 Afam Street",
                "district_id" => 2,
                "province_id" => 1,
                "phone" => "08036683468",
                "about" => "Patrick Atata",
                "station_id" => 1
            ],
            [
                "address" => "#13 Afam Street",
                "title" => "#13 Afam Street",
                "district_id" => 2,
                "province_id" => 1,
                "phone" => "08074851085",
                "about" => "Mrs Elebi",
                "station_id" => 1
            ],
            [
                "address" => "#14 Afam Street",
                "title" => "#14 Afam Street",
                "district_id" => 2,
                "province_id" => 1,
                "phone" => "08088061903",
                "about" => "Mrs Firimabo Ogunga",
                "station_id" => 1
            ],
            [
                "address" => "#15 Afam Street",
                "title" => "#15 Afam Street",
                "district_id" => 2,
                "province_id" => 1,
                "phone" => "08076938045",
                "about" => "Mrs Okoro",
                "station_id" => 1
            ],
            [
                "address" => "#12 Afam Street",
                "title" => "#12 Afam Street",
                "district_id" => 2,
                "province_id" => 1,
                "phone" => "08051111541",
                "about" => "Mr. & Mrs. Darlington",
                "station_id" => 1
            ],
            [
                "address" => "#1 Abak street ",
                "title" => "#1 Abak street ",
                "district_id" => 2,
                "province_id" => 1,
                "phone" => "0803466533",
                "about" => "Esther Ephraim",
                "station_id" => 1
            ],
            [
                "address" => "#2 Warri Street",
                "title" => "#2 Warri Street",
                "district_id" => 3,
                "province_id" => 1,
                "phone" => "08037205853",
                "about" => "Mr. Kelechi Orieh",
                "station_id" => 1
            ],
            [
                "address" => "#1 Warri Street",
                "title" => "#1 Warri Street",
                "district_id" => 3,
                "province_id" => 1,
                "phone" => "08035079722",
                "about" => "Mr. Henry Beresibo",
                "station_id" => 1
            ],
            [
                "address" => "#11 Warri Street",
                "title" => "#11 Warri Street",
                "district_id" => 3,
                "province_id" => 1,
                "phone" => "08099309574",
                "about" => "Josiah TamunoAla",
                "station_id" => 1
            ],
            [
                "address" => "#1 Abak Street",
                "title" => "#1 Abak Street",
                "district_id" => 3,
                "province_id" => 1,
                "phone" => "08064962776",
                "about" => "Mrs. Ruth Orughe",
                "station_id" => 1
            ],
            [
                "address" => "#5B Awka Street",
                "title" => "#5B Awka Street",
                "district_id" => 3,
                "province_id" => 1,
                "phone" => "08037940100",
                "about" => "Mr. Ephraim Amachree",
                "station_id" => 1
            ],
            [
                "address" => "#10 Awka Street",
                "title" => "#10 Awka Street",
                "district_id" => 3,
                "province_id" => 1,
                "phone" => "08064962776",
                "about" => "Mr. Ekima Orlu",
                "station_id" => 1
            ],
            [
                "address" => "#13 Awka Street",
                "title" => "#13 Awka Street",
                "district_id" => 3,
                "province_id" => 1,
                "phone" => "08060470377",
                "about" => "Mr. Franklin Erekosima",
                "station_id" => 1
            ],
            [
                "address" => "#1 Oloibiri street ",
                "title" => "#1 Oloibiri street ",
                "district_id" => 4,
                "province_id" => 1,
                "phone" => "07039071148",
                "about" => "Joy Shedrack ",
                "station_id" => 1
            ],
            [
                "address" => "#6 Oloibiri Street",
                "title" => "#6 Oloibiri Street",
                "district_id" => 4,
                "province_id" => 1,
                "phone" => "08063469162",
                "about" => "Ibiso Halliday",
                "station_id" => 1
            ],
            [
                "address" => "#9 Oloibiri Street",
                "title" => "#9 Oloibiri Street",
                "district_id" => 4,
                "province_id" => 1,
                "phone" => "08038861483",
                "about" => "Cosmas Ogbonna",
                "station_id" => 1
            ],
            [
                "address" => "#15 Oloibiri Street",
                "title" => "#15 Oloibiri Street",
                "district_id" => 4,
                "province_id" => 1,
                "phone" => "08037070271",
                "about" => "Chibuke Adiele",
                "station_id" => 1
            ],
            [
                "address" => "#19 Oloibiri Street",
                "title" => "#19 Oloibiri Street",
                "district_id" => 4,
                "province_id" => 1,
                "phone" => "08038696829",
                "about" => "Benibo Charles",
                "station_id" => 1
            ],
            [
                "address" => "#35 Sangana Street",
                "title" => "#35 Sangana Street",
                "district_id" => 5,
                "province_id" => 1,
                "phone" => "08034319966",
                "about" => "Bro Okorite Abbey",
                "station_id" => 1
            ],
            [
                "address" => "#53 Sangana Street",
                "title" => "#53 Sangana Street",
                "district_id" => 5,
                "province_id" => 1,
                "phone" => "08180918671",
                "about" => "Mr Sunday Odum",
                "station_id" => 1
            ],
            [
                "address" => "#63 Sangana Street",
                "title" => "#63 Sangana Street",
                "district_id" => 5,
                "province_id" => 1,
                "about" => "Ubong",
                "station_id" => 1
            ],
            [
                "address" => "#26 Sangana Street",
                "title" => "#26 Sangana Street",
                "district_id" => 5,
                "province_id" => 1,
                "phone" => "08037105016",
                "about" => "Bro. Azubuike Ifeanyi",
                "station_id" => 1
            ],
            [
                "address" => "#61 Sangana Street",
                "title" => "#61 Sangana Street",
                "district_id" => 5,
                "province_id" => 1,
                "phone" => "08109240748",
                "about" => "Augustina",
                "station_id" => 1
            ],
            [
                "address" => "#7 Uyo Street",
                "title" => "#7 Uyo Street",
                "district_id" => 6,
                "province_id" => 1,
                "phone" => "08037374233",
                "about" => "Elder Gladys Nwosu",
                "station_id" => 1
            ],
            [
                "address" => "#4 Uyo  Street",
                "title" => "#4 Uyo  Street",
                "district_id" => 6,
                "province_id" => 1,
                "phone" => "08151245455",
                "about" => "Bro Pius Omotayo",
                "station_id" => 1
            ],
            [
                "address" => "#20 Uyo Street",
                "title" => "#20 Uyo Street",
                "district_id" => 6,
                "province_id" => 1,
                "phone" => "08034344497",
                "about" => "Nebari",
                "station_id" => 1
            ],
            [
                "address" => "#13 Uyo Street",
                "title" => "#13 Uyo Street",
                "district_id" => 6,
                "province_id" => 1,
                "phone" => "08038886306",
                "about" => "Sis Amiye",
                "station_id" => 1
            ],
            [
                "address" => "#31 Uyo Street",
                "title" => "#31 Uyo Street",
                "district_id" => 6,
                "province_id" => 1,
                "phone" => "08033405217",
                "about" => "Mr Amieye horsefall",
                "station_id" => 1
            ],
            [
                "address" => "#17 Uyo Street ",
                "title" => "#17 Uyo Street ",
                "district_id" => 6,
                "province_id" => 1,
                "phone" => "07032533277",
                "about" => "Sarah Okike",
                "station_id" => 1
            ],
            [
                "address" => "#9 Ohaeto Street, D/Line",
                "title" => "#9 Ohaeto Street, D/Line",
                "district_id" => 7,
                "province_id" => 1,
                "phone" => "08036646369",
                "about" => "Mr & Mrs Tom Jack",
                "station_id" => 1
            ],
            [
                "address" => "#3 Ohaeto Street, D/Line",
                "title" => "#3 Ohaeto Street, D/Line",
                "district_id" => 7,
                "province_id" => 1,
                "phone" => "08037976226",
                "about" => "Sis Grace B. Beauty ",
                "station_id" => 1
            ],
            [
                "address" => "#8 Ohaeto street D/line",
                "title" => "#8 Ohaeto street D/line",
                "district_id" => 7,
                "province_id" => 1,
                "phone" => "08035715089",
                "about" => "Mr &Mrs Dimgba",
                "station_id" => 1
            ],
            [
                "address" => "#1 Mbonu Street, (Durables), D/Line",
                "title" => "#1 Mbonu Street, (Durables), D/Line",
                "district_id" => 7,
                "province_id" => 1,
                "phone" => "08036704439",
                "about" => "Mr. Igwe",
                "station_id" => 1
            ],
            [
                "address" => "#40 Mbonu Street, D/Line",
                "title" => "#40 Mbonu Street, D/Line",
                "district_id" => 7,
                "province_id" => 1,
                "phone" => "08037500488",
                "about" => "Sis Patricia Tafri",
                "station_id" => 1
            ],
            [
                "address" => "#60 Mbonu Street",
                "title" => "#60 Mbonu Street",
                "district_id" => 7,
                "province_id" => 1,
                "phone" => "08034490015",
                "about" => "Dcn Philip Micah",
                "station_id" => 1
            ],
            [
                "address" => "3a Abeokuta street D/line",
                "title" => "3a Abeokuta street D/line",
                "district_id" => 8,
                "province_id" => 1,
                "phone" => "08035423929",
                "about" => "Mr & Mrs Adum Chigozie",
                "station_id" => 1
            ],
            [
                "address" => "#2c Bolo Street",
                "title" => "#2c Bolo Street",
                "district_id" => 8,
                "province_id" => 1,
                "phone" => "08038703816",
                "about" => "Mr & Mrs Destiny",
                "station_id" => 1
            ],
            [
                "address" => "#7 Bolo Street, D/Line",
                "title" => "#7 Bolo Street, D/Line",
                "district_id" => 8,
                "province_id" => 1,
                "phone" => "08031142091",
                "about" => "Mr. Isaac Olatunji",
                "station_id" => 1
            ],
            [
                "address" => "#7b Okorodu Street",
                "title" => "#7b Okorodu Street",
                "district_id" => 8,
                "province_id" => 1,
                "phone" => "08037027974",
                "about" => "Bro. Dotimi A.",
                "station_id" => 1
            ],
            [
                "address" => "#17 Abeokuta street D/line",
                "title" => "#17 Abeokuta street D/line",
                "district_id" => 8,
                "province_id" => 1,
                "phone" => "08037113090",
                "about" => "Bro Michael Ebeatu",
                "station_id" => 1
            ],
            [
                "address" => "#16 Igboukwu Street, D/Line",
                "title" => "#16 Igboukwu Street, D/Line",
                "district_id" => 9,
                "province_id" => 1,
                "phone" => "08064304041",
                "about" => "Dcns Rachael Oladele",
                "station_id" => 1
            ],
            [
                "address" => "#42 Igboukwu Street D/Line",
                "title" => "#42 Igboukwu Street D/Line",
                "district_id" => 9,
                "province_id" => 1,
                "about" => "KHMS Main HALL",
                "station_id" => 1
            ],
            [
                "address" => "#49 Igboukwu Street D/Line",
                "title" => "#49 Igboukwu Street D/Line",
                "district_id" => 9,
                "province_id" => 1,
                "about" => "Corper Lodge.",
                "station_id" => 1
            ],
            [
                "address" => "#33 Igboukwu Street, D/Line",
                "title" => "#33 Igboukwu Street, D/Line",
                "district_id" => 9,
                "province_id" => 1,
                "phone" => "08033219102",
                "about" => "Pst Emmanuel Ordu",
                "station_id" => 1
            ],
            [
                "address" => "#42B Igboukwu Street, D/Lne",
                "title" => "#42B Igboukwu Street, D/Lne",
                "district_id" => 9,
                "province_id" => 1,
                "about" => "KHMS 1st Floor (Right)",
                "station_id" => 1
            ],
            [
                "address" => "#28 Kaduna Street D/Line",
                "title" => "#28 Kaduna Street D/Line",
                "district_id" => 9,
                "province_id" => 1,
                "station_id" => 1
            ],
            [
                "address" => "#42A Igboukwu Street, D/Line",
                "title" => "#42A Igboukwu Street, D/Line",
                "district_id" => 9,
                "province_id" => 1,
                "phone" => " ",
                "about" => "KHMS 1st Floor (Right)",
                "station_id" => 1
            ],
            [
                "address" => "#14 Igboukwu Street",
                "title" => "#14 Igboukwu Street",
                "district_id" => 9,
                "province_id" => 1,
                "phone" => "09064081488",
                "about" => "Mr. & Mrs. Nwabueze",
                "station_id" => 1
            ],
            [
                "address" => "#11 Isiokpo Street, D/Line",
                "title" => "#11 Isiokpo Street, D/Line",
                "district_id" => 10,
                "province_id" => 1,
                "phone" => "08037226959",
                "about" => "Sis Tari Tubo Tein",
                "station_id" => 1
            ],
            [
                "address" => "#15 Isiokpo Street, D/Line",
                "title" => "#15 Isiokpo Street, D/Line",
                "district_id" => 10,
                "province_id" => 1,
                "phone" => "08033106537",
                "about" => "Bro Ita Ikoh",
                "station_id" => 1
            ],
            [
                "address" => "#18 Isiokpo Street, D/Line",
                "title" => "#18 Isiokpo Street, D/Line",
                "district_id" => 10,
                "province_id" => 1,
                "phone" => "08033133487",
                "about" => "Mrs Kine Fubara",
                "station_id" => 1
            ],
            [
                "address" => "#25 Isiokpo Street, D/Line",
                "title" => "#25 Isiokpo Street, D/Line",
                "district_id" => 10,
                "province_id" => 1,
                "phone" => "08032552570",
                "about" => "Mrs Okawanne",
                "station_id" => 1
            ],
            [
                "address" => "#30B Isiokpo Street, D/Line",
                "title" => "#30B Isiokpo Street, D/Line",
                "district_id" => 10,
                "province_id" => 1,
                "phone" => "08037237261",
                "about" => "Mrs Inokoba",
                "station_id" => 1
            ],
            [
                "address" => "#33 Isiokpo Street, D/Line",
                "title" => "#33 Isiokpo Street, D/Line",
                "district_id" => 10,
                "province_id" => 1,
                "phone" => "08037237261",
                "about" => "MR & Mrs Inokoba",
                "station_id" => 1
            ],
            [
                "address" => "#41  Isiokpo Street",
                "title" => "#41  Isiokpo Street",
                "district_id" => 10,
                "province_id" => 1,
                "phone" => "08039515620",
                "about" => "John Osiri",
                "station_id" => 1
            ],
            [
                "address" => "#13 Isiokpo Street, D/line",
                "title" => "#13 Isiokpo Street, D/line",
                "district_id" => 10,
                "province_id" => 1,
                "phone" => "08036127290",
                "about" => "Pst Emmanuel Aborah",
                "station_id" => 1
            ],
            [
                "address" => "#4 Agudama Street, D/Line",
                "title" => "#4 Agudama Street, D/Line",
                "district_id" => 11,
                "province_id" => 1,
                "phone" => "08033483628",
                "about" => "Sis. Dorathy Ogada",
                "station_id" => 1
            ],
            [
                "address" => "#21 Agudama Street D/Line",
                "title" => "#21 Agudama Street D/Line",
                "district_id" => 11,
                "province_id" => 1,
                "phone" => "08055068584",
                "about" => "Elder & Elder Mrs Nwabeke",
                "station_id" => 1
            ],
            [
                "address" => "Railway Mechanic workshop",
                "title" => "Railway Mechanic workshop",
                "district_id" => 11,
                "province_id" => 1,
                "about" => "Mr Chidi Johnson",
                "station_id" => 1
            ],
            [
                "address" => "#4 Egelege Street, D/Line",
                "title" => "#4 Egelege Street, D/Line",
                "district_id" => 12,
                "province_id" => 1,
                "phone" => "08068539635",
                "about" => "Mr. & Mrs.  Ivoke",
                "station_id" => 1
            ],
            [
                "address" => "Blk F, Flat 2 Khana Street, D/Line",
                "title" => "Blk F, Flat 2 Khana Street, D/Line",
                "district_id" => 12,
                "province_id" => 1,
                "phone" => "08068819860",
                "about" => "Mr. & Mrs. Ogulu Emma",
                "station_id" => 1
            ],
            [
                "address" => "Blk F, Flat 4, Khana Street, D/Line",
                "title" => "Blk F, Flat 4, Khana Street, D/Line",
                "district_id" => 12,
                "province_id" => 1,
                "phone" => "07039558353",
                "about" => "Miss. Akporguno",
                "station_id" => 1
            ],
            [
                "address" => "Blk B, Flat 4, Khana Street, D/Line",
                "title" => "Blk B, Flat 4, Khana Street, D/Line",
                "district_id" => 12,
                "province_id" => 1,
                "phone" => "08037093844",
                "about" => "Mr. & Mrs. Dokubo",
                "station_id" => 1
            ],
            [
                "address" => "#2 Iriebe Street D/line",
                "title" => "#2 Iriebe Street D/line",
                "district_id" => 12,
                "province_id" => 1,
                "about" => "Itoha Mercy",
                "station_id" => 1
            ],
            [
                "address" => "#3 Ndashi Street, D/Line",
                "title" => "#3 Ndashi Street, D/Line",
                "district_id" => 13,
                "province_id" => 1,
                "phone" => "08037419018",
                "about" => "Mr. & Mrs. Fubara Cookey",
                "station_id" => 1
            ],
            [
                "address" => "#15a Ndashi Street, D/Line",
                "title" => "#15a Ndashi Street, D/Line",
                "district_id" => 13,
                "province_id" => 1,
                "phone" => "08035498012",
                "about" => "Mr. & Mrs. Ukah",
                "station_id" => 1
            ],
            [
                "address" => "#15b Ndashi Street, D/Line",
                "title" => "#15b Ndashi Street, D/Line",
                "district_id" => 13,
                "province_id" => 1,
                "phone" => "08136934430",
                "about" => "Mrs. Judith Emeka",
                "station_id" => 1
            ],
            [
                "address" => "#15c Ndashi Street, D/Line",
                "title" => "#15c Ndashi Street, D/Line",
                "district_id" => 13,
                "province_id" => 1,
                "phone" => "08034359088",
                "about" => "Mr. & Mrs. Leo Dikeocha",
                "station_id" => 1
            ],
            [
                "address" => "#15a Ndashi Street, D/Line",
                "title" => "#15a Ndashi Street, D/Line",
                "district_id" => 13,
                "province_id" => 1,
                "about" => "Abiya Oribim",
                "station_id" => 1
            ],
            [
                "address" => "#15b Ndashi Street, D/Line",
                "title" => "#15b Ndashi Street, D/Line",
                "district_id" => 13,
                "province_id" => 1,
                "about" => "Umeh Hope Obinna",
                "station_id" => 1
            ],
            [
                "address" => "#1 King David Close",
                "title" => "#1 King David Close",
                "district_id" => 13,
                "province_id" => 1,
                "phone" => "08035498012",
                "about" => "DCN. & Mrs. Uranta",
                "station_id" => 1
            ],
            [
                "address" => "#3 Wogu Street, D/Line",
                "title" => "#3 Wogu Street, D/Line",
                "district_id" => 14,
                "province_id" => 1,
                "phone" => "08037249584",
                "about" => "Dcns I. Karibo",
                "station_id" => 1
            ],
            [
                "address" => "#34 Wogu Street, D/Line",
                "title" => "#34 Wogu Street, D/Line",
                "district_id" => 14,
                "province_id" => 1,
                "phone" => "08038842145",
                "about" => "Mr & Mrs Boma Lawrence",
                "station_id" => 1
            ],
            [
                "address" => "#10  Wogu Street, D/Line",
                "title" => "#10  Wogu Street, D/Line",
                "district_id" => 14,
                "province_id" => 1,
                "phone" => "08067021402",
                "about" => "Mrs Edith",
                "station_id" => 1
            ],
            [
                "address" => "#37 Wogu Street D/Line",
                "title" => "#37 Wogu Street D/Line",
                "district_id" => 14,
                "province_id" => 1,
                "phone" => "08033102821",
                "about" => "Mr Michael Erekosima",
                "station_id" => 1
            ],
            [
                "address" => "#6 Okomoko Street D/Line",
                "title" => "#6 Okomoko Street D/Line",
                "district_id" => 14,
                "province_id" => 1,
                "phone" => "08034221998",
                "about" => "Mrs Blessing Akpasa",
                "station_id" => 1
            ],
            [
                "address" => "#2 Ibaa Street ",
                "title" => "#2 Ibaa Street ",
                "district_id" => 14,
                "province_id" => 1,
                "phone" => "08067161927",
                "about" => "Mrs Helen",
                "station_id" => 1
            ],
            [
                "address" => "#22 Omoku Street D/Line",
                "title" => "#22 Omoku Street D/Line",
                "district_id" => 14,
                "province_id" => 1,
                "phone" => "08037971338",
                "about" => "Mr Theophilus Okata",
                "station_id" => 1
            ],
            [
                "address" => "#11 Umuechem Street D/Line",
                "title" => "#11 Umuechem Street D/Line",
                "district_id" => 15,
                "province_id" => 1,
                "phone" => "08036724981",
                "about" => "Mr & Mrs Nze",
                "station_id" => 1
            ],
            [
                "address" => "Nurses Quarters, Umuechem Street, D/line",
                "title" => "Nurses Quarters, Umuechem Street, D/line",
                "district_id" => 15,
                "province_id" => 1,
                "phone" => "08137172087",
                "about" => "Mrs Victoria Agbandu",
                "station_id" => 1
            ],
            [
                "address" => "#15 Umuechem Street ",
                "title" => "#15 Umuechem Street ",
                "district_id" => 15,
                "province_id" => 1,
                "phone" => "08032684798",
                "about" => "Mr & Mrs Kiki Somiari",
                "station_id" => 1
            ],
            [
                "address" => "#4 Oromineke Lane D/line",
                "title" => "#4 Oromineke Lane D/line",
                "district_id" => 16,
                "province_id" => 1,
                "phone" => "08066897022",
                "about" => "Mr & Mrs Aniankele",
                "station_id" => 1
            ],
            [
                "address" => "#28 Emekuku Street. D/Line",
                "title" => "#28 Emekuku Street. D/Line",
                "district_id" => 16,
                "province_id" => 1,
                "phone" => "08037111279",
                "about" => "Sister Bridget Beke",
                "station_id" => 1
            ],
            [
                "address" => "#77 Emekuku Street, D/Line",
                "title" => "#77 Emekuku Street, D/Line",
                "district_id" => 16,
                "province_id" => 1,
                "phone" => "08033104346",
                "about" => "Dcn. Parker A.",
                "station_id" => 1
            ],
            [
                "address" => "#40 Emekuku street D/line",
                "title" => "#40 Emekuku street D/line",
                "district_id" => 16,
                "province_id" => 1,
                "phone" => "08038719173",
                "about" => "Mr & Mrs Felix O.",
                "station_id" => 1
            ],
            [
                "address" => "#51c Emekuku Street, D/line",
                "title" => "#51c Emekuku Street, D/line",
                "district_id" => 16,
                "province_id" => 1,
                "phone" => "07031188667",
                "about" => "Mr & Mrs Essien N. Essien",
                "station_id" => 1
            ],
            [
                "address" => "#83 Emekuku Street, D/Line",
                "title" => "#83 Emekuku Street, D/Line",
                "district_id" => 16,
                "province_id" => 1,
                "phone" => "09060021905",
                "about" => "Mrs Vivian Kenule",
                "station_id" => 1
            ],
            [
                "address" => "#18 Peremabiri Street, D/Line",
                "title" => "#18 Peremabiri Street, D/Line",
                "district_id" => 16,
                "province_id" => 1,
                "phone" => "08108527725",
                "about" => "Mr & Mrs Tamuno",
                "station_id" => 1
            ],
            [
                "address" => "#20 Peremabiri Street",
                "title" => "#20 Peremabiri Street",
                "district_id" => 16,
                "province_id" => 1,
                "phone" => "07034961547",
                "about" => "Mr & Mrs. Solomon Sylvanus",
                "station_id" => 1
            ],
            [
                "address" => "Car Wash beside LFC D/line ",
                "title" => "Car Wash beside LFC D/line ",
                "district_id" => 16,
                "province_id" => 1,
                "phone" => "09022000373",
                "about" => "Sis. Adaobi Olivia",
                "station_id" => 1
            ],
            [
                "address" => "#6 Oromineke Street, D/Line",
                "title" => "#6 Oromineke Street, D/Line",
                "district_id" => 16,
                "province_id" => 1,
                "phone" => "08032681354",
                "about" => "Elder Stella Ikemadu",
                "station_id" => 1
            ],
            [
                "address" => "#5 Manilla Pepple Street, D/Line",
                "title" => "#5 Manilla Pepple Street, D/Line",
                "district_id" => 17,
                "province_id" => 1,
                "phone" => "07065773483",
                "about" => "Dcns Mercy Wilson",
                "station_id" => 1
            ],
            [
                "address" => "#7 Igbokwe Street, D/Line",
                "title" => "#7 Igbokwe Street, D/Line",
                "district_id" => 17,
                "province_id" => 1,
                "phone" => "08063951466",
                "about" => "Comfort Cookeygam",
                "station_id" => 1
            ],
            [
                "address" => "#22 Igbokwe Street, D/Line",
                "title" => "#22 Igbokwe Street, D/Line",
                "district_id" => 17,
                "province_id" => 1,
                "phone" => "07031093665",
                "about" => "Hope Nwaka",
                "station_id" => 1
            ],
            [
                "address" => "#18 Okoroji Street, D/Line",
                "title" => "#18 Okoroji Street, D/Line",
                "district_id" => 17,
                "province_id" => 1,
                "phone" => "08056220207",
                "about" => "Dcn. Mike Idung",
                "station_id" => 1
            ],
            [
                "address" => "#16 Manilla Pepple Street, D/Line",
                "title" => "#16 Manilla Pepple Street, D/Line",
                "district_id" => 17,
                "province_id" => 1,
                "phone" => "08037088140",
                "about" => "Nimibofa Iwowari",
                "station_id" => 1
            ],
            [
                "address" => "#23 Okoroji Street, Dline",
                "title" => "#23 Okoroji Street, Dline",
                "district_id" => 17,
                "province_id" => 1,
                "phone" => "08036607313",
                "about" => "Patience Ataidu",
                "station_id" => 1
            ],
            [
                "address" => "#39 Okoroji Street, D/Line",
                "title" => "#39 Okoroji Street, D/Line",
                "district_id" => 17,
                "province_id" => 1,
                "about" => "Ben Nathan",
                "station_id" => 1
            ],
            [
                "address" => "#36 Okoroji Street, D/line",
                "title" => "#36 Okoroji Street, D/line",
                "district_id" => 17,
                "province_id" => 1,
                "about" => "Prince Edwin Eze",
                "station_id" => 1
            ],
            [
                "address" => "Olu Obasanjo police barack block C flat C",
                "title" => "Olu Obasanjo police barack block C flat C",
                "district_id" => 18,
                "province_id" => 1,
                "about" => "Mrs Susana Wokejile",
                "station_id" => 1
            ],
            [
                "address" => "Olu Obasanjo police barack block C flat 7",
                "title" => "Olu Obasanjo police barack block C flat 7",
                "district_id" => 18,
                "province_id" => 1,
                "station_id" => 1
            ],
            [
                "address" => "#63 Olu Obasanjo Road",
                "title" => "#63 Olu Obasanjo Road",
                "district_id" => 18,
                "province_id" => 1,
                "phone" => "08033416429",
                "about" => "Dcn/Dcns K Okere",
                "station_id" => 1
            ],
            [
                "address" => "Olu Obasanjo Police Barrack Block C Flat C",
                "title" => "Olu Obasanjo Police Barrack Block C Flat C",
                "district_id" => 18,
                "province_id" => 1,
                "phone" => "08036607313",
                "about" => "Mrs. Susana Wokejile",
                "station_id" => 1
            ],
            [
                "address" => "#1 Ogbunabali Road",
                "title" => "#1 Ogbunabali Road",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07061511786",
                "about" => "Mr. & Mrs Nelly Peter",
                "station_id" => 1
            ],
            [
                "address" => "#35B Gada Str.",
                "title" => "#35B Gada Str.",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07038792824",
                "about" => "Mr. & Mrs. Georgewill Ibinabo",
                "station_id" => 1
            ],
            [
                "address" => "23B Gada Str.",
                "title" => "23B Gada Str.",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08037465973",
                "about" => "Sis. Queen Chinwo",
                "station_id" => 1
            ],
            [
                "address" => "#61 Gada Street",
                "title" => "#61 Gada Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07038792824",
                "about" => "Mr. & Mrs. Chima Nyeche",
                "station_id" => 1
            ],
            [
                "address" => "#24 Gada Street",
                "title" => "#24 Gada Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08030845619",
                "about" => "Mr. Kennedy Chinwo",
                "station_id" => 1
            ],
            [
                "address" => "#41 Gada Street",
                "title" => "#41 Gada Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08038672014, 08063402149",
                "about" => "Mr. & Mrs Believe Chinda",
                "station_id" => 1
            ],
            [
                "address" => "#31 Ogbunabali road",
                "title" => "#31 Ogbunabali road",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08064116577, 08065834704",
                "about" => "Mr. & Mrs. Emmanuel Elijah",
                "station_id" => 1
            ],
            [
                "address" => "#23 Gada Street",
                "title" => "#23 Gada Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08037465973",
                "about" => "Mr/Mrs. Ogbonda Samuel",
                "station_id" => 1
            ],
            [
                "address" => "#37 Ogbunabali Rd.",
                "title" => "#37 Ogbunabali Rd.",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08138159103",
                "about" => "Mr. & Mrs. Raphael Igia",
                "station_id" => 1
            ],
            [
                "address" => "#11 Nerewosu Street",
                "title" => "#11 Nerewosu Street",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Mr./Mrs. Marvin Cookey",
                "station_id" => 1
            ],
            [
                "address" => "12 Eastern by-pass",
                "title" => "12 Eastern by-pass",
                "district_id" => 1,
                "province_id" => 2,
                "station_id" => 1
            ],
            [
                "address" => "#5 Okey Street",
                "title" => "#5 Okey Street",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Mr./Mrs. Billy",
                "station_id" => 1
            ],
            [
                "address" => "#1 Owhor Close, By Holy Paradise Church ",
                "title" => "#1 Owhor Close, By Holy Paradise Church ",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Mr. & Mrs. Monday Dogo",
                "station_id" => 1
            ],
            [
                "address" => "#10b Okwori Street.",
                "title" => "#10b Okwori Street.",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Mr. & Mrs. Oghenekaro",
                "station_id" => 1
            ],
            [
                "address" => "#5 Eastern ByPass Road",
                "title" => "#5 Eastern ByPass Road",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Mr./Mrs. Aribibia Merrick",
                "station_id" => 1
            ],
            [
                "address" => "#15 Odu Street Ogbunambali Road",
                "title" => "#15 Odu Street Ogbunambali Road",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Sister Gift",
                "station_id" => 1
            ],
            [
                "address" => "# 24 Odu Str.",
                "title" => "# 24 Odu Str.",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Mr. & Mrs. George Anietie",
                "station_id" => 1
            ],
            [
                "address" => "#117 Ogbunabali Road",
                "title" => "#117 Ogbunabali Road",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07065893971",
                "about" => "Cioma Charity Atako",
                "station_id" => 1
            ],
            [
                "address" => "#80 Ogbunabali road",
                "title" => "#80 Ogbunabali road",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08056657357",
                "about" => "Sis. Justina  Bariledum",
                "station_id" => 1
            ],
            [
                "address" => "#103 Ogbunabali Road",
                "title" => "#103 Ogbunabali Road",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08039494622",
                "about" => "Veronica Wopara",
                "station_id" => 1
            ],
            [
                "address" => "#106 Ogbunabali Road",
                "title" => "#106 Ogbunabali Road",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08065973049",
                "about" => "Bro. Nimi Asimiea",
                "station_id" => 1
            ],
            [
                "address" => "#127 Ogbunabali Road",
                "title" => "#127 Ogbunabali Road",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07031120435",
                "about" => "Elder Hannah",
                "station_id" => 1
            ],
            [
                "address" => "#122 Ogbunabali Road",
                "title" => "#122 Ogbunabali Road",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08106782626",
                "about" => "Sis. Oriaku Juliet",
                "station_id" => 1
            ],
            [
                "address" => "#125 Ogbunabali Road",
                "title" => "#125 Ogbunabali Road",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08033361454",
                "about" => "Ogbobula Joseph ",
                "station_id" => 1
            ],
            [
                "address" => "#111 Ogbunabali Road",
                "title" => "#111 Ogbunabali Road",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Blessing Chikezie",
                "station_id" => 1
            ],
            [
                "address" => "#105 Ogbunabali Road ",
                "title" => "#105 Ogbunabali Road ",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Monday Barieeba Nduudee",
                "station_id" => 1
            ],
            [
                "address" => "#85 Ogbum-Nu-Abali Road",
                "title" => "#85 Ogbum-Nu-Abali Road",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Mr. Solomon Akaninyere",
                "station_id" => 1
            ],
            [
                "address" => "#1 Ohia Street, Ogbunabali",
                "title" => "#1 Ohia Street, Ogbunabali",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08033106221",
                "about" => "Pst & Mrs.Tony Atako",
                "station_id" => 1
            ],
            [
                "address" => "#11 Ohia Street, Ogbunabali",
                "title" => "#11 Ohia Street, Ogbunabali",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07033402950",
                "about" => "Mr & Mrs Segun",
                "station_id" => 1
            ],
            [
                "address" => "#2 Ohia Street, Ogbunabali",
                "title" => "#2 Ohia Street, Ogbunabali",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08056657357",
                "about" => "Mr Emeka Atako",
                "station_id" => 1
            ],
            [
                "address" => "#13 Ogbuga Street",
                "title" => "#13 Ogbuga Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08038992133",
                "about" => "Mr./Mrs. Peter Dickson",
                "station_id" => 1
            ],
            [
                "address" => "#6 Anyawata Street.",
                "title" => "#6 Anyawata Street.",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08063412489",
                "about" => "Mrs. Prisca Aniekan ",
                "station_id" => 1
            ],
            [
                "address" => "#16 Ohia Street ",
                "title" => "#16 Ohia Street ",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08033384507",
                "about" => "Mr./Mrs. Marvin Cookey",
                "station_id" => 1
            ],
            [
                "address" => "22 Ohia Street",
                "title" => "22 Ohia Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08038917857",
                "about" => "Gladys Ukata",
                "station_id" => 1
            ],
            [
                "address" => "#22 Okeh Avenue ",
                "title" => "#22 Okeh Avenue ",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08038950370",
                "about" => "Bro Shola Babalola",
                "station_id" => 1
            ],
            [
                "address" => "#9 Okeh Avenue, Ogbunabali",
                "title" => "#9 Okeh Avenue, Ogbunabali",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08037823777",
                "about" => "Bro Wami Chinedu",
                "station_id" => 1
            ],
            [
                "address" => "#24 Okeh Avenue",
                "title" => "#24 Okeh Avenue",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08101513510",
                "about" => "Maudelin C. Ngara ",
                "station_id" => 1
            ],
            [
                "address" => "#27 Okeh Avenue",
                "title" => "#27 Okeh Avenue",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08164613226",
                "about" => "Mr Ese  Gbadgry",
                "station_id" => 1
            ],
            [
                "address" => "#32 Okeh Avenue",
                "title" => "#32 Okeh Avenue",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08036716911",
                "about" => "Mrs Fubara",
                "station_id" => 1
            ],
            [
                "address" => "#8 Wobidike Lane, Chiokwa",
                "title" => "#8 Wobidike Lane, Chiokwa",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08033765406",
                "about" => "Mr. Uyi  Nelson",
                "station_id" => 1
            ],
            [
                "address" => "Winny Home cell",
                "title" => "Winny Home cell",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "09034314360",
                "about" => "Bro Kenneth Eneh Levi",
                "station_id" => 1
            ],
            [
                "address" => "5 Wobidike Lane, Chiokwa",
                "title" => "5 Wobidike Lane, Chiokwa",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08038533359",
                "about" => "Mrs Loveth Okonoboh",
                "station_id" => 1
            ],
            [
                "address" => "#7 Orije Street ",
                "title" => "#7 Orije Street ",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08120018000",
                "about" => "Ayo Taiwo",
                "station_id" => 1
            ],
            [
                "address" => "#10 Orije Street",
                "title" => "#10 Orije Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07037971950",
                "about" => "Dr Steve Anni",
                "station_id" => 1
            ],
            [
                "address" => "#3 Dike Woke Lane",
                "title" => "#3 Dike Woke Lane",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "09070754709",
                "about" => "Adolphus Nnanna",
                "station_id" => 1
            ],
            [
                "address" => "#4 Dike Woke  Lane",
                "title" => "#4 Dike Woke  Lane",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08033427738",
                "about" => "Dcns Famine Micah",
                "station_id" => 1
            ],
            [
                "address" => "Orije Water Front 2",
                "title" => "Orije Water Front 2",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07062820320",
                "about" => "Charity Philip",
                "station_id" => 1
            ],
            [
                "address" => "PST. Wokekoro Compound",
                "title" => "PST. Wokekoro Compound",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08033016312",
                "about" => "Pst Sunny Wokekoro",
                "station_id" => 1
            ],
            [
                "address" => "#7B Orije Street",
                "title" => "#7B Orije Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08079765884",
                "about" => "Ngozi Charles",
                "station_id" => 1
            ],
            [
                "address" => "#5 Patrick Crescent ",
                "title" => "#5 Patrick Crescent ",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08038227739",
                "about" => "Ekwere Basil",
                "station_id" => 1
            ],
            [
                "address" => "#4 Anume Street",
                "title" => "#4 Anume Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "09038863783",
                "about" => "Mr./Mrs. Kenneth Amadi",
                "station_id" => 1
            ],
            [
                "address" => "#9 Anume Street",
                "title" => "#9 Anume Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08135130247",
                "about" => "Mr. Oba Peter",
                "station_id" => 1
            ],
            [
                "address" => "#19 Orianwo Street",
                "title" => "#19 Orianwo Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08105163577",
                "about" => "Mrs. I.K Opara ",
                "station_id" => 1
            ],
            [
                "address" => "#14 Chief Chinwo Street",
                "title" => "#14 Chief Chinwo Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08097147824",
                "about" => "Mrs. Joy Omeodu",
                "station_id" => 1
            ],
            [
                "address" => "#1 Owuru Close",
                "title" => "#1 Owuru Close",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08063564060",
                "about" => "DCNS. Onengye Noah",
                "station_id" => 1
            ],
            [
                "address" => "#5 Worgu Lane",
                "title" => "#5 Worgu Lane",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08030913342",
                "about" => "DCNS. Tilda Lucky",
                "station_id" => 1
            ],
            [
                "address" => "#6 Anume Street",
                "title" => "#6 Anume Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08064238786",
                "about" => "Mrs. Peter Udofia",
                "station_id" => 1
            ],
            [
                "address" => "#2 Adumgbi Lane",
                "title" => "#2 Adumgbi Lane",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07068692861",
                "about" => "Elizabeth Owhonda",
                "station_id" => 1
            ],
            [
                "address" => "#48 Aba/Orianwo Street",
                "title" => "#48 Aba/Orianwo Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08171717095",
                "about" => "Kingsley Amachere",
                "station_id" => 1
            ],
            [
                "address" => "#28 Oriaku Street",
                "title" => "#28 Oriaku Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07026335455",
                "about" => "Mr. Ekom Koffi",
                "station_id" => 1
            ],
            [
                "address" => "#7 Chief Ihunda Lane, Off Oriaku",
                "title" => "#7 Chief Ihunda Lane, Off Oriaku",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08035357324",
                "about" => "Mrs. Augusta Amiesimaka ",
                "station_id" => 1
            ],
            [
                "address" => "#19 Woke Lane",
                "title" => "#19 Woke Lane",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08036997937",
                "about" => "Mrs. Sandra Chikere",
                "station_id" => 1
            ],
            [
                "address" => "#9A Ezeolu Lane",
                "title" => "#9A Ezeolu Lane",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08037776923",
                "about" => "Ebitari B.F",
                "station_id" => 1
            ],
            [
                "address" => "#9B  Ezeolu Street, Ogbunabali ",
                "title" => "#9B  Ezeolu Street, Ogbunabali ",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08039242745",
                "about" => "Mr Elvis",
                "station_id" => 1
            ],
            [
                "address" => "#12 Oke Lane",
                "title" => "#12 Oke Lane",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08066659328",
                "about" => "Mr. K. Chinwo",
                "station_id" => 1
            ],
            [
                "address" => "#12 Woke Lane",
                "title" => "#12 Woke Lane",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08166586539",
                "about" => "Mr. Abraham Sola",
                "station_id" => 1
            ],
            [
                "address" => "#1 Ali Street, Ogbunabali",
                "title" => "#1 Ali Street, Ogbunabali",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07034391694",
                "about" => "Bro Kelvin Deele",
                "station_id" => 1
            ],
            [
                "address" => "#18 Oriaku Street",
                "title" => "#18 Oriaku Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08053845300",
                "about" => "Mrs Nikki",
                "station_id" => 1
            ],
            [
                "address" => "#9 Okwu Crescent",
                "title" => "#9 Okwu Crescent",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08064731112",
                "about" => "Mr.& Mrs.  Emife Chimenem Orlu",
                "station_id" => 1
            ],
            [
                "address" => "#8 Ogoloma Street",
                "title" => "#8 Ogoloma Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08036674313/08065787588",
                "about" => "Mr./Mrs. Nna Benson",
                "station_id" => 1
            ],
            [
                "address" => "#27 Chief Chinwo Street",
                "title" => "#27 Chief Chinwo Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08060323517",
                "about" => "DCN./Mrs Chikodi Elendu",
                "station_id" => 1
            ],
            [
                "address" => "#9 Ogoloma Street",
                "title" => "#9 Ogoloma Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08033424229",
                "about" => "Mrs.  Caroline Amadi",
                "station_id" => 1
            ],
            [
                "address" => "#16 Chief Amadi Str.",
                "title" => "#16 Chief Amadi Str.",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07056966664",
                "about" => "Mr. & Mrs. Inye",
                "station_id" => 1
            ],
            [
                "address" => "#9 Amos Ogoloma Lane, Ogbunabali",
                "title" => "#9 Amos Ogoloma Lane, Ogbunabali",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08030846025",
                "about" => "Mr. & Mrs Itode Krama",
                "station_id" => 1
            ],
            [
                "address" => "#4 Aguma Str.",
                "title" => "#4 Aguma Str.",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08108635166",
                "about" => "Sis Felicia Robinson",
                "station_id" => 1
            ],
            [
                "address" => "#14b Chief Chinwo Street",
                "title" => "#14b Chief Chinwo Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08038909437",
                "about" => "Mr. & Mrs. Emmanuel Birah",
                "station_id" => 1
            ],
            [
                "address" => "#13 Chinworoun str. Ogbuga",
                "title" => "#13 Chinworoun str. Ogbuga",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07046414562",
                "about" => "Mr. & Mrs Ekeh Alphonsus",
                "station_id" => 1
            ],
            [
                "address" => "#30 Ede Street",
                "title" => "#30 Ede Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08035086375",
                "about" => "Mrs. Theresa",
                "station_id" => 1
            ],
            [
                "address" => "#1 Nerewosu Str.",
                "title" => "#1 Nerewosu Str.",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Mr. & Mrs. Alexander Ndubuisi",
                "station_id" => 1
            ],
            [
                "address" => "#7b Nerewosu Street",
                "title" => "#7b Nerewosu Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08063746606",
                "about" => "Mr & Mrs Honest",
                "station_id" => 1
            ],
            [
                "address" => "No 11, Ofunike street, Off Ogbuga street, By Chief John Ogbonda cmpd, Ogbunabali",
                "title" => "No 11, Ofunike street, Off Ogbuga street, By Chief John Ogbonda cmpd, Ogbunabali",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07012378654",
                "about" => "Mrs Ijeoma Augustine",
                "station_id" => 1
            ],
            [
                "address" => "#  5b Anyawata Street.",
                "title" => "#  5b Anyawata Street.",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08068085548",
                "about" => "Mr. & Mrs. Oliver Eze",
                "station_id" => 1
            ],
            [
                "address" => "#29 Chief Ogbuga Str.",
                "title" => "#29 Chief Ogbuga Str.",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08068841039",
                "about" => "Mrs. Comfort Mba",
                "station_id" => 1
            ],
            [
                "address" => "#23 Nerewosu Street",
                "title" => "#23 Nerewosu Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "09060159676",
                "about" => "Mrs Ihuoma Okonta",
                "station_id" => 1
            ],
            [
                "address" => "# 9B Ede Street, ",
                "title" => "# 9B Ede Street, ",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08039343877",
                "about" => "Benedith Kpughizini",
                "station_id" => 1
            ],
            [
                "address" => "Ojukwu Odum Street",
                "title" => "Ojukwu Odum Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07038741307",
                "about" => "Bro Cosmos",
                "station_id" => 1
            ],
            [
                "address" => "#6 Chinda Wagbara Off Ede Street",
                "title" => "#6 Chinda Wagbara Off Ede Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08057221284",
                "about" => "Rosemary Orlu",
                "station_id" => 1
            ],
            [
                "address" => "#9 Chinda Wagbara",
                "title" => "#9 Chinda Wagbara",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07037939002",
                "about" => "Victoria  Deekea",
                "station_id" => 1
            ],
            [
                "address" => "#12 Ngwor Street",
                "title" => "#12 Ngwor Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "09060592659",
                "about" => "Ebije",
                "station_id" => 1
            ],
            [
                "address" => "#10 Chinda wagbara street",
                "title" => "#10 Chinda wagbara street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08182977982",
                "about" => "Adebayo Esther",
                "station_id" => 1
            ],
            [
                "address" => "#31 Chief John Ogbonda Street",
                "title" => "#31 Chief John Ogbonda Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08032700480",
                "about" => "Barikpoa Kpugi",
                "station_id" => 1
            ],
            [
                "address" => "#7 Ayawata Street, Ogbunabali",
                "title" => "#7 Ayawata Street, Ogbunabali",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08066195793",
                "about" => "Jane Okechukwu ",
                "station_id" => 1
            ],
            [
                "address" => "#2 Aso Rock ",
                "title" => "#2 Aso Rock ",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07053349336",
                "about" => "Helen Kunee",
                "station_id" => 1
            ],
            [
                "address" => "Akarolo Estate",
                "title" => "Akarolo Estate",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08038140908",
                "about" => "Tina Igboh",
                "station_id" => 1
            ],
            [
                "address" => "Plot 2 Aso Rock",
                "title" => "Plot 2 Aso Rock",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07034206081",
                "about" => "Jenny Eiffel",
                "station_id" => 1
            ],
            [
                "address" => "#18 Woluchem Layout",
                "title" => "#18 Woluchem Layout",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08135046890",
                "about" => "Chioma Adeyemo",
                "station_id" => 1
            ],
            [
                "address" => "#2C Nnodi Street ",
                "title" => "#2C Nnodi Street ",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08035000377",
                "about" => "Mrs. Oroma Adula ",
                "station_id" => 1
            ],
            [
                "address" => "#1 Odum Close",
                "title" => "#1 Odum Close",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08034884240",
                "about" => "Mrs. Mary Thompson ",
                "station_id" => 1
            ],
            [
                "address" => "#33 Ogbuga Street",
                "title" => "#33 Ogbuga Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08038874705",
                "about" => "Mrs. Atane Emmanuella",
                "station_id" => 1
            ],
            [
                "address" => "#10 Nnodi Str.",
                "title" => "#10 Nnodi Str.",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08068811525",
                "about" => "Mrs. Ijeoma K. Umoh",
                "station_id" => 1
            ],
            [
                "address" => "#15 Chinwerekom Str.",
                "title" => "#15 Chinwerekom Str.",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08063891728",
                "about" => "Mrs. Roseline Woche",
                "station_id" => 1
            ],
            [
                "address" => "#9B Nnodi Street",
                "title" => "#9B Nnodi Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07032389230",
                "about" => "Mrs. Epbabari Glory",
                "station_id" => 1
            ],
            [
                "address" => "#13B Rumuigbo Street, Old GRA",
                "title" => "#13B Rumuigbo Street, Old GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08036678965",
                "about" => "Dele Olagundoye",
                "station_id" => 1
            ],
            [
                "address" => "#12 Isaac Boro Street, Old GRA",
                "title" => "#12 Isaac Boro Street, Old GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08037526248",
                "about" => "Andrew Okosi",
                "station_id" => 1
            ],
            [
                "address" => "#3 Finima Street, Old GRA",
                "title" => "#3 Finima Street, Old GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08162855120",
                "about" => "Cynthia P.",
                "station_id" => 1
            ],
            [
                "address" => "#21 Igbodo Street, Old GRA",
                "title" => "#21 Igbodo Street, Old GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07036518557",
                "about" => "Lydia Osazuwa",
                "station_id" => 1
            ],
            [
                "address" => "Car wash 1",
                "title" => "Car wash 1",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08176133892",
                "about" => "Okwudiri G.",
                "station_id" => 1
            ],
            [
                "address" => "Car wash 2",
                "title" => "Car wash 2",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08136250739",
                "about" => "Onyewuchi onyenwe",
                "station_id" => 1
            ],
            [
                "address" => "Car wash 4 ",
                "title" => "Car wash 4 ",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08148983683",
                "about" => "Omana Godswill",
                "station_id" => 1
            ],
            [
                "address" => "#8 Rumuoparaeli Street",
                "title" => "#8 Rumuoparaeli Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08037248362",
                "about" => "Adeniji I.",
                "station_id" => 1
            ],
            [
                "address" => "Car Wash 3",
                "title" => "Car Wash 3",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08128360622",
                "about" => "Florence D.",
                "station_id" => 1
            ],
            [
                "address" => "1b Finima",
                "title" => "1b Finima",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08037083642",
                "about" => "Mr. Godfrey Emulo",
                "station_id" => 1
            ],
            [
                "address" => "13b Ernest Ikoli St, OLD GRA",
                "title" => "13b Ernest Ikoli St, OLD GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08098402080",
                "about" => "Mr Dabraboye Briggs",
                "station_id" => 1
            ],
            [
                "address" => "13c Ernest Ikoli",
                "title" => "13c Ernest Ikoli",
                "district_id" => 1,
                "province_id" => 2,
                "about" => "Mr & Mrs Ojuka",
                "station_id" => 1
            ],
            [
                "address" => "16 Ernest Ikoli St",
                "title" => "16 Ernest Ikoli St",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08035982888",
                "about" => "Dr Toinpri Apribo",
                "station_id" => 1
            ],
            [
                "address" => "5 Akassa St., OLD GRA",
                "title" => "5 Akassa St., OLD GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08061239434",
                "about" => "Michael G. Mike",
                "station_id" => 1
            ],
            [
                "address" => "8 Alalibo St, OLA GRA",
                "title" => "8 Alalibo St, OLA GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08033101500",
                "about" => "Francis Kiri",
                "station_id" => 1
            ],
            [
                "address" => "2nd Avenue, Eastern bypass, off Alalibo Avenue",
                "title" => "2nd Avenue, Eastern bypass, off Alalibo Avenue",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07038410358",
                "about" => "Gift Aka",
                "station_id" => 1
            ],
            [
                "address" => "18 Abana St, OLD GRA",
                "title" => "18 Abana St, OLD GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08037006196",
                "about" => "Kemi Olawoyin",
                "station_id" => 1
            ],
            [
                "address" => "26 Abana St, OLD GRA",
                "title" => "26 Abana St, OLD GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08036687118",
                "about" => "Mrs Franca Wokoma",
                "station_id" => 1
            ],
            [
                "address" => "27 Abana St, OLD GRA",
                "title" => "27 Abana St, OLD GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08129392063",
                "about" => "Mr & Mrs Eze Chukuigwe",
                "station_id" => 1
            ],
            [
                "address" => "First Avenue, off Forces Avenue, OLD GRA",
                "title" => "First Avenue, off Forces Avenue, OLD GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08033103306",
                "about" => "Mrs Tonye Harry",
                "station_id" => 1
            ],
            [
                "address" => "15b William Jumbo St",
                "title" => "15b William Jumbo St",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08037083888",
                "about" => "Elder Dagogo Jack",
                "station_id" => 1
            ],
            [
                "address" => "15D Creek Hospital Lane",
                "title" => "15D Creek Hospital Lane",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "07064591058",
                "about" => "Claude Ejile",
                "station_id" => 1
            ],
            [
                "address" => "78, Forces Avenue, , Old GRA, Govt House Qtrs, Block B, Flat 5",
                "title" => "78, Forces Avenue, , Old GRA, Govt House Qtrs, Block B, Flat 5",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "8064328014",
                "about" => "Promise Tambari",
                "station_id" => 1
            ],
            [
                "address" => "1 Opokuma St, OLD GRA",
                "title" => "1 Opokuma St, OLD GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08037242672",
                "about" => "Dcn Friday Aaron",
                "station_id" => 1
            ],
            [
                "address" => "47 Forces Avenue, OLD GRA",
                "title" => "47 Forces Avenue, OLD GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08035529816",
                "about" => "Friday Faraday",
                "station_id" => 1
            ],
            [
                "address" => "4 Wonwu Crescent, OLD GRA",
                "title" => "4 Wonwu Crescent, OLD GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08037015401",
                "about" => "Mr Edward Pepple",
                "station_id" => 1
            ],
            [
                "address" => "#3B Wokekoro Street, Old GRA",
                "title" => "#3B Wokekoro Street, Old GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08033387925",
                "about" => "Mrs. Ann Iyala",
                "station_id" => 1
            ],
            [
                "address" => "#44 Herbert Macauley Street, Amadi Flat",
                "title" => "#44 Herbert Macauley Street, Amadi Flat",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08038705119",
                "about" => "Dcns. Boma Briggs",
                "station_id" => 1
            ],
            [
                "address" => "#40 Nzimiro Street, Amadi Flat",
                "title" => "#40 Nzimiro Street, Amadi Flat",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08036227947",
                "about" => "Sis Juliet Allagoa",
                "station_id" => 1
            ],
            [
                "address" => "#1 Ejoh Close, Amadi Flat",
                "title" => "#1 Ejoh Close, Amadi Flat",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08171232789",
                "about" => "DCN. Charles Bobmanuel ",
                "station_id" => 1
            ],
            [
                "address" => "#3 Yola Street, Old GRA",
                "title" => "#3 Yola Street, Old GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "09031174193",
                "about" => "Mrs. Precious Anicho",
                "station_id" => 1
            ],
            [
                "address" => "9B Nzimiro Street, Old GRA",
                "title" => "9B Nzimiro Street, Old GRA",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08035077891",
                "about" => "Sis. Faustina Iderima",
                "station_id" => 1
            ],
            [
                "address" => "#7c Akure Street",
                "title" => "#7c Akure Street",
                "district_id" => 1,
                "province_id" => 2,
                "phone" => "08033396807",
                "about" => "Dcns O. Okujagu",
                "station_id" => 1
            ],
            [
                "address" => "#10 Isaac Boro Street",
                "title" => "#10 Isaac Boro Street",
                "district_id" => 1,
                "province_id" => 2,
                "station_id" => 1
            ],
            [
                "address" => "#9 Umuoji Street, Mile I",
                "title" => "#9 Umuoji Street, Mile I",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08035988253",
                "about" => "Damian Eze",
                "station_id" => 1
            ],
            [
                "address" => "#2 Umuoji Street, Mile 1",
                "title" => "#2 Umuoji Street, Mile 1",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08035988253",
                "about" => "Chinyere Ogunkayode",
                "station_id" => 1
            ],
            [
                "address" => "#11 Okija Street, Mile I",
                "title" => "#11 Okija Street, Mile I",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Katherine Worlu",
                "station_id" => 1
            ],
            [
                "address" => "#25 Okija Street, Mile I",
                "title" => "#25 Okija Street, Mile I",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Ann Williams",
                "station_id" => 1
            ],
            [
                "address" => "#45C Okija Street, Mile I",
                "title" => "#45C Okija Street, Mile I",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Sis. Alice Weris",
                "station_id" => 1
            ],
            [
                "address" => "Police barrack",
                "title" => "Police barrack",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Philomena Ukana",
                "station_id" => 1
            ],
            [
                "address" => "#19 Nsukka Str. ",
                "title" => "#19 Nsukka Str. ",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Mr. Tamuno Iyowunate Amachree",
                "station_id" => 1
            ],
            [
                "address" => "#30 Nsukka Street",
                "title" => "#30 Nsukka Street",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Mrs Amara",
                "station_id" => 1
            ],
            [
                "address" => "#11 Agwu Street",
                "title" => "#11 Agwu Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08062330362",
                "about" => "Dauda Adeboye",
                "station_id" => 1
            ],
            [
                "address" => "#7B Agwu Str.",
                "title" => "#7B Agwu Str.",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08032620560",
                "about" => "Mr Francis Udoka",
                "station_id" => 1
            ],
            [
                "address" => "#9 Nnewi Str",
                "title" => "#9 Nnewi Str",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Sobari Sampson",
                "station_id" => 1
            ],
            [
                "address" => "#22B Abakaliki/Afikpo ",
                "title" => "#22B Abakaliki/Afikpo ",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08033165011",
                "about" => "David Gabriel",
                "station_id" => 1
            ],
            [
                "address" => "#12 Awgu, Mile I",
                "title" => "#12 Awgu, Mile I",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Madam J. Agala",
                "station_id" => 1
            ],
            [
                "address" => "#52 Ikwerre Road, Mile I Diobu",
                "title" => "#52 Ikwerre Road, Mile I Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08068819551",
                "about" => "Eni A. Okpani",
                "station_id" => 1
            ],
            [
                "address" => "#75 Ikwerre Rd. ",
                "title" => "#75 Ikwerre Rd. ",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07035543392",
                "about" => "Dcn. Windy Elenwo",
                "station_id" => 1
            ],
            [
                "address" => "#14 Nnewi street mile 1 Diobu",
                "title" => "#14 Nnewi street mile 1 Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07033370077",
                "about" => "Bro. Sunnywise",
                "station_id" => 1
            ],
            [
                "address" => "#11 Nnewi Street",
                "title" => "#11 Nnewi Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07039450649",
                "about" => "Tina Sunday",
                "station_id" => 1
            ],
            [
                "address" => "#28 Ikwerre Road, Mile 1 Diobu",
                "title" => "#28 Ikwerre Road, Mile 1 Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08064323213",
                "about" => "Charity Gogo Abite",
                "station_id" => 1
            ],
            [
                "address" => "#20 Ikwerre Rd. Mile 1",
                "title" => "#20 Ikwerre Rd. Mile 1",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08032311065",
                "about" => "Kingsley Ogbuji",
                "station_id" => 1
            ],
            [
                "address" => "#38 Ikwerre Road, Mile I Diobu",
                "title" => "#38 Ikwerre Road, Mile I Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Fubara Kio",
                "station_id" => 1
            ],
            [
                "address" => "#22B Abakaliki/Afikpo ",
                "title" => "#22B Abakaliki/Afikpo ",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08033165011",
                "about" => "David Gabriel",
                "station_id" => 1
            ],
            [
                "address" => "Elechi WaterFront",
                "title" => "Elechi WaterFront",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07069604611",
                "about" => "West T. Wilson",
                "station_id" => 1
            ],
            [
                "address" => "Elechi down pyma phase II",
                "title" => "Elechi down pyma phase II",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07067753119",
                "about" => "Bro. Emmanuel Sunday",
                "station_id" => 1
            ],
            [
                "address" => "#135 Ikwerre Road, Mile II",
                "title" => "#135 Ikwerre Road, Mile II",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08069265290",
                "about" => "Imaobong A.",
                "station_id" => 1
            ],
            [
                "address" => "#123A Ikwerre Road, Mile II Diobu",
                "title" => "#123A Ikwerre Road, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08032270126",
                "about" => "Iwori Kusoromi",
                "station_id" => 1
            ],
            [
                "address" => "#123B Ikwerre road Mile 2 diobu",
                "title" => "#123B Ikwerre road Mile 2 diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08068203939",
                "about" => "Joy Tasie",
                "station_id" => 1
            ],
            [
                "address" => "11b Gambia Street ",
                "title" => "11b Gambia Street ",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08063765575",
                "about" => "Kalu Chima",
                "station_id" => 1
            ],
            [
                "address" => "#123C Ikwerre Road, Mile II Diobu",
                "title" => "#123C Ikwerre Road, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08182017148",
                "about" => "Amadi Cyntyhia",
                "station_id" => 1
            ],
            [
                "address" => "#10 Okohia Street, Mile II Diobu",
                "title" => "#10 Okohia Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08067639895",
                "about" => "Elder James Nkie ",
                "station_id" => 1
            ],
            [
                "address" => "#3 Okonkwo Street, Mile II PH",
                "title" => "#3 Okonkwo Street, Mile II PH",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07030483977",
                "about" => "Sis. Dorathy Okoro",
                "station_id" => 1
            ],
            [
                "address" => "#4 Okonkwo Street, Mile II PH",
                "title" => "#4 Okonkwo Street, Mile II PH",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08038718408",
                "about" => "Ruth Imafidon",
                "station_id" => 1
            ],
            [
                "address" => "#9 Okonkwo Street, Mile II PH",
                "title" => "#9 Okonkwo Street, Mile II PH",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08036690231",
                "about" => "Bro. Bibowei Igbongidi",
                "station_id" => 1
            ],
            [
                "address" => "#37 Gambia Street Mile II PH",
                "title" => "#37 Gambia Street Mile II PH",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08168282985",
                "about" => "DIEPREYE AYANGBA",
                "station_id" => 1
            ],
            [
                "address" => "#39C Gambia Street Mile II PH",
                "title" => "#39C Gambia Street Mile II PH",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08086945253",
                "about" => "Sis. Siyeofori West-End",
                "station_id" => 1
            ],
            [
                "address" => "#20 Okonkwo Street, Mile II PH",
                "title" => "#20 Okonkwo Street, Mile II PH",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08032478056",
                "about" => "UGE EBI MARIA",
                "station_id" => 1
            ],
            [
                "address" => "#5b Gambia Lane Mile II PHC",
                "title" => "#5b Gambia Lane Mile II PHC",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08181278401",
                "about" => "SIS Julie Marcus",
                "station_id" => 1
            ],
            [
                "address" => "#8B Obi Street, Mile II Diobu",
                "title" => "#8B Obi Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08173989292",
                "about" => "Bro. Rowland Amadi",
                "station_id" => 1
            ],
            [
                "address" => "#7 Obi Street, Mile II",
                "title" => "#7 Obi Street, Mile II",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08035081569",
                "about" => "Mr.Clemenu Igwe J.P",
                "station_id" => 1
            ],
            [
                "address" => "#26 Akokwa Street, Mile II Diobu",
                "title" => "#26 Akokwa Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08037605237",
                "about" => "Kingsley Uzoma",
                "station_id" => 1
            ],
            [
                "address" => "#15 Obudu Street, Mile I",
                "title" => "#15 Obudu Street, Mile I",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08051937842",
                "about" => "Bro Glory A.",
                "station_id" => 1
            ],
            [
                "address" => "#11 Ogwa Street, Mile I",
                "title" => "#11 Ogwa Street, Mile I",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Ikechukwu O.",
                "station_id" => 1
            ],
            [
                "address" => "#38 Akokwa Street, Mile II Diobu",
                "title" => "#38 Akokwa Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08037100406",
                "about" => "Bro Wosu",
                "station_id" => 1
            ],
            [
                "address" => "#45 Akokwa Street, Mile II Diobu",
                "title" => "#45 Akokwa Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08065998234",
                "about" => "Bro Temple",
                "station_id" => 1
            ],
            [
                "address" => "#76 Akokwa Street, Mile II Diobu",
                "title" => "#76 Akokwa Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08025265841",
                "about" => "Sis Awari",
                "station_id" => 1
            ],
            [
                "address" => "#90 Akokwa Street, Mile II Diobu",
                "title" => "#90 Akokwa Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07032460073",
                "about" => "Bro Chinasa Ojim",
                "station_id" => 1
            ],
            [
                "address" => "#1 Ovim Lane",
                "title" => "#1 Ovim Lane",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "09030233799",
                "about" => "Sis Lilian",
                "station_id" => 1
            ],
            [
                "address" => "#40 School Road",
                "title" => "#40 School Road",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07033479472",
                "about" => "Udeme Williams Christian",
                "station_id" => 1
            ],
            [
                "address" => "#50 Echue Street, Mile II Diobu",
                "title" => "#50 Echue Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07051310136",
                "about" => "Mr. & Mrs. Etea Odum Etea",
                "station_id" => 1
            ],
            [
                "address" => "#39 Echue Street, Mile II Diobu",
                "title" => "#39 Echue Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08035441003",
                "about" => "Mr. & Mrs. Joseph Bell-Gam",
                "station_id" => 1
            ],
            [
                "address" => "#32 Echue Street, Mile II Diobu",
                "title" => "#32 Echue Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08165232193",
                "about" => "Mr. & Mrs. Damiete Douglas",
                "station_id" => 1
            ],
            [
                "address" => "#100 Echue Street, Mile II Diobu",
                "title" => "#100 Echue Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08068833566",
                "about" => "Sis. Erefa Ekine",
                "station_id" => 1
            ],
            [
                "address" => "#99 Echue Street",
                "title" => "#99 Echue Street",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Mrs. Akonte Odah",
                "station_id" => 1
            ],
            [
                "address" => "#38 Echue Street",
                "title" => "#38 Echue Street",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Wariso George",
                "station_id" => 1
            ],
            [
                "address" => "#10 Anozie Street",
                "title" => "#10 Anozie Street",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "MR UZOHO FRANCIS",
                "station_id" => 1
            ],
            [
                "address" => "# 66 TIMBER STREET MILE DIOBU ",
                "title" => "# 66 TIMBER STREET MILE DIOBU ",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07035747260",
                "about" => "MR/MRS AE.BRANGA",
                "station_id" => 1
            ],
            [
                "address" => "#32 TIMBER STREET MILE 11 DIOBU",
                "title" => "#32 TIMBER STREET MILE 11 DIOBU",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08132858826",
                "about" => "MRS ANTHONIA ",
                "station_id" => 1
            ],
            [
                "address" => "#10 Ojoto Street",
                "title" => "#10 Ojoto Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08038914403",
                "about" => "SIS CYTHIA EJAFOR ",
                "station_id" => 1
            ],
            [
                "address" => "#20 Ojoto Street,Mile II Diobu",
                "title" => "#20 Ojoto Street,Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08186446900",
                "about" => "Mr./Mrs. Ibe Chidiebere",
                "station_id" => 1
            ],
            [
                "address" => "#21 Emole Street, Mile II",
                "title" => "#21 Emole Street, Mile II",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08064058509",
                "about" => "Ognu Nnamdi",
                "station_id" => 1
            ],
            [
                "address" => "#15 Adelabu Street, Mile II Diobu",
                "title" => "#15 Adelabu Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07085021336",
                "about" => "Joseph O. J Taribo",
                "station_id" => 1
            ],
            [
                "address" => "#12 Adelabu Street, PH",
                "title" => "#12 Adelabu Street, PH",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "David Benjamin",
                "station_id" => 1
            ],
            [
                "address" => "#21 Adelabu Street, Mile II Diobu",
                "title" => "#21 Adelabu Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08063268541",
                "about" => "Charles A. Sunday",
                "station_id" => 1
            ],
            [
                "address" => "#36C Adelabu Street, Mile II Diobu",
                "title" => "#36C Adelabu Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08167517222",
                "about" => "Sunday Idika",
                "station_id" => 1
            ],
            [
                "address" => "#19 Emole Str., PH",
                "title" => "#19 Emole Str., PH",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08038886431",
                "about" => "Favour P. Uzoukwu",
                "station_id" => 1
            ],
            [
                "address" => "#44D Adelabu Street, Mile II Diobu",
                "title" => "#44D Adelabu Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07034390663",
                "about" => "Opara A. Ikechukwu",
                "station_id" => 1
            ],
            [
                "address" => "#8 Abba Street, Mile II Diobu",
                "title" => "#8 Abba Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08037394072",
                "about" => "Bro. Henry Okoro",
                "station_id" => 1
            ],
            [
                "address" => "#26 Abba Street, Mile II Diobu",
                "title" => "#26 Abba Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08037315818",
                "about" => "Sis. Esther Ahunanya",
                "station_id" => 1
            ],
            [
                "address" => "#26 Afikpo Street, Mile II Diobu",
                "title" => "#26 Afikpo Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08104996467",
                "about" => "Bro Fa-gere Cotterel",
                "station_id" => 1
            ],
            [
                "address" => "#12 Abba, Mile I",
                "title" => "#12 Abba, Mile I",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08183116648",
                "about" => "Madam V. Olali",
                "station_id" => 1
            ],
            [
                "address" => "#62 Afikpo Str.",
                "title" => "#62 Afikpo Str.",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Sis Mercy Braid",
                "station_id" => 1
            ],
            [
                "address" => "#85 Afikpo Street",
                "title" => "#85 Afikpo Street",
                "district_id" => 1,
                "province_id" => 3,
                "about" => "Young Uche",
                "station_id" => 1
            ],
            [
                "address" => "#5 Egede Str.",
                "title" => "#5 Egede Str.",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08035106654",
                "about" => "Mrs. Goodness Iwueze",
                "station_id" => 1
            ],
            [
                "address" => "#58 Egede Street",
                "title" => "#58 Egede Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07035192050",
                "about" => "Francis",
                "station_id" => 1
            ],
            [
                "address" => "Akokwa Waterfront",
                "title" => "Akokwa Waterfront",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "09131539866",
                "about" => "Sis Victoria ",
                "station_id" => 1
            ],
            [
                "address" => "#2 Okwelle Street, Mile II Diobu",
                "title" => "#2 Okwelle Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08066974382",
                "about" => "Sis. Grace Akpan",
                "station_id" => 1
            ],
            [
                "address" => "#1 Dick Tiger Street",
                "title" => "#1 Dick Tiger Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08032328498",
                "about" => "Mr. & Mrs. Josepk K.",
                "station_id" => 1
            ],
            [
                "address" => "#14 Lumumba Street, Mile II",
                "title" => "#14 Lumumba Street, Mile II",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08187392770",
                "about" => "Bro. Boma Jack",
                "station_id" => 1
            ],
            [
                "address" => "#16 Okwelle Street, Mile II Diobu",
                "title" => "#16 Okwelle Street, Mile II Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08035481600",
                "about" => "Mr. & Mrs. Isong Favour",
                "station_id" => 1
            ],
            [
                "address" => "#37 Lumumba Street Mile II",
                "title" => "#37 Lumumba Street Mile II",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08037071443",
                "about" => "Banas Amobi",
                "station_id" => 1
            ],
            [
                "address" => "#29 Ekwulobia St. Mile III",
                "title" => "#29 Ekwulobia St. Mile III",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08026580646",
                "about" => "Stella Osita",
                "station_id" => 1
            ],
            [
                "address" => "#4 Nwachukwu Street, Mile II",
                "title" => "#4 Nwachukwu Street, Mile II",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08038944495",
                "about" => "Gerard Kuru",
                "station_id" => 1
            ],
            [
                "address" => "#33 Nwachukwu Street, Mile II",
                "title" => "#33 Nwachukwu Street, Mile II",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08033893313",
                "about" => "Fidelia Eric",
                "station_id" => 1
            ],
            [
                "address" => "# 49 NWACHUKWU STREET MILE 11",
                "title" => "# 49 NWACHUKWU STREET MILE 11",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08105042596",
                "about" => "LOVE OKIMI",
                "station_id" => 1
            ],
            [
                "address" => "#6 Ihediohama Street, Mile II",
                "title" => "#6 Ihediohama Street, Mile II",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "09039420199",
                "about" => "Mr. Obi Sylvester",
                "station_id" => 1
            ],
            [
                "address" => "#42 Abel Jumbo Street, Mile II",
                "title" => "#42 Abel Jumbo Street, Mile II",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07030887861",
                "about" => "Mrs. Felicia U. Bright",
                "station_id" => 1
            ],
            [
                "address" => "#75 Abel Jumbo Street, Mile II ",
                "title" => "#75 Abel Jumbo Street, Mile II ",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08066827199",
                "about" => "David Green",
                "station_id" => 1
            ],
            [
                "address" => "13b Ojiegbu Street",
                "title" => "13b Ojiegbu Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07069669191",
                "about" => "Helen Okene",
                "station_id" => 1
            ],
            [
                "address" => "#27 Owo Street",
                "title" => "#27 Owo Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08032331709",
                "about" => "Elizabeth Afinidi",
                "station_id" => 1
            ],
            [
                "address" => "#19 Dickson Street",
                "title" => "#19 Dickson Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08037082678",
                "about" => "Sis. Faith",
                "station_id" => 1
            ],
            [
                "address" => "#22 Ihute Str.",
                "title" => "#22 Ihute Str.",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08032711251",
                "about" => "Amadi Ngozi",
                "station_id" => 1
            ],
            [
                "address" => "#150 Ikwerrre Road",
                "title" => "#150 Ikwerrre Road",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07061644105",
                "about" => "Igonda Ichemati",
                "station_id" => 1
            ],
            [
                "address" => "#16 Ojiegbu Street, Mile II",
                "title" => "#16 Ojiegbu Street, Mile II",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08069086381",
                "about" => "Faith Amadi",
                "station_id" => 1
            ],
            [
                "address" => "#16 Rumuokokuru",
                "title" => "#16 Rumuokokuru",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08033427905",
                "about" => "DCNS. Helen Opara Martins",
                "station_id" => 1
            ],
            [
                "address" => "#27 Owhonda Street",
                "title" => "#27 Owhonda Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08066589446",
                "about" => "Blessing Mene",
                "station_id" => 1
            ],
            [
                "address" => "#25 Ogwa Street",
                "title" => "#25 Ogwa Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08033427905",
                "about" => "DCNS. Rejoice St. Charles",
                "station_id" => 1
            ],
            [
                "address" => "Security Village (RSU)",
                "title" => "Security Village (RSU)",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08068660905",
                "about" => "Mgbudu Augustine",
                "station_id" => 1
            ],
            [
                "address" => "#3 Ekwolobia Street, Mile III Diobu",
                "title" => "#3 Ekwolobia Street, Mile III Diobu",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07068665357",
                "about" => "Gabriel Uzuoma",
                "station_id" => 1
            ],
            [
                "address" => "#42 Wokoma Street",
                "title" => "#42 Wokoma Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08033400408",
                "about" => "Dagogo Adada",
                "station_id" => 1
            ],
            [
                "address" => "#25 Wobo Street",
                "title" => "#25 Wobo Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07035459067",
                "about" => "Nkechi Anyanwu",
                "station_id" => 1
            ],
            [
                "address" => "#17 Christ Apostolic Street",
                "title" => "#17 Christ Apostolic Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08037112915",
                "about" => "Funk Solake",
                "station_id" => 1
            ],
            [
                "address" => "#86 Azkiwe Street",
                "title" => "#86 Azkiwe Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "07037278019",
                "about" => "Belema Belema",
                "station_id" => 1
            ],
            [
                "address" => "#20 Enwume Street",
                "title" => "#20 Enwume Street",
                "district_id" => 1,
                "province_id" => 3,
                "phone" => "08062332557",
                "about" => "Chinelo  Ojimba",
                "station_id" => 1
            ],
            [
                "address" => "#14 Badume Street, Oroworukwo",
                "title" => "#14 Badume Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08037421593",
                "about" => "Pst. Iche Mgba",
                "station_id" => 1
            ],
            [
                "address" => "#11 Ovunwo Street, Oroworukwo",
                "title" => "#11 Ovunwo Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08028708988",
                "about" => "Elder Wakama",
                "station_id" => 1
            ],
            [
                "address" => "Nitel Quarters 2",
                "title" => "Nitel Quarters 2",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08135301457",
                "about" => "Boma Dorathy",
                "station_id" => 1
            ],
            [
                "address" => "Nitel Quarters 4",
                "title" => "Nitel Quarters 4",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08063439262",
                "about" => "Sis. Ibiye Odinuwe",
                "station_id" => 1
            ],
            [
                "address" => "#20 Amadi Street",
                "title" => "#20 Amadi Street",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08148037309",
                "about" => "Mama Blessing",
                "station_id" => 1
            ],
            [
                "address" => "#31 Worukwo Street ",
                "title" => "#31 Worukwo Street ",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08060449339",
                "about" => "Sis Stella Agu",
                "station_id" => 1
            ],
            [
                "address" => "#6 Ovunwo Street",
                "title" => "#6 Ovunwo Street",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08167338214",
                "about" => "Sis Chinonso",
                "station_id" => 1
            ],
            [
                "address" => "#14 Ovunwo Street",
                "title" => "#14 Ovunwo Street",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08163712079",
                "about" => "Sis Chinwendu Mba",
                "station_id" => 1
            ],
            [
                "address" => "House 5, Rd 14/Lane 1, NAF Harmony",
                "title" => "House 5, Rd 14/Lane 1, NAF Harmony",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08070341235",
                "about" => "Pst. Joseph Olima",
                "station_id" => 1
            ],
            [
                "address" => "#17 Kpaluku Street Oroworokwo",
                "title" => "#17 Kpaluku Street Oroworokwo",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "09036349663",
                "about" => "Jeremiah Nathaniel",
                "station_id" => 1
            ],
            [
                "address" => "#10 Ejege Lane",
                "title" => "#10 Ejege Lane",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08102948872",
                "about" => "Mr. & Mrs. Sunny Ogoloma",
                "station_id" => 1
            ],
            [
                "address" => "#10 Ezebunwo Close, Oroworukwo",
                "title" => "#10 Ezebunwo Close, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "about" => " Inoru family",
                "station_id" => 1
            ],
            [
                "address" => "#5 Wokogoloma Street, Oroworukwo",
                "title" => "#5 Wokogoloma Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "station_id" => 1
            ],
            [
                "address" => "#22 Wokogoloma Street, Oroworukwo",
                "title" => "#22 Wokogoloma Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "about" => "Mr. & Mrs. John Nlurum",
                "station_id" => 1
            ],
            [
                "address" => "#25 Wokogoloma Street",
                "title" => "#25 Wokogoloma Street",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08133869956",
                "about" => "Mr. & Mrs. Michael Wombi",
                "station_id" => 1
            ],
            [
                "address" => "# 4 Ogoloma Street, Oroworukwo",
                "title" => "# 4 Ogoloma Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "07056101015",
                "about" => "Success Amachree",
                "station_id" => 1
            ],
            [
                "address" => "# 7 Ogoloma Street, Oroworukwo",
                "title" => "# 7 Ogoloma Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "0806 4962776",
                "about" => "Mr & Mrs Orlu Ekima Godpower",
                "station_id" => 1
            ],
            [
                "address" => "#39 Ogoloma Street, Oroworukwo",
                "title" => "#39 Ogoloma Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "0806 3116624",
                "about" => "Mr & Mrs Charles Michael",
                "station_id" => 1
            ],
            [
                "address" => "# 6 Wami Street, Oroworukwo",
                "title" => "# 6 Wami Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "0817 2129996",
                "about" => "Sis. Queen Ejoh",
                "station_id" => 1
            ],
            [
                "address" => "#10, Worukwo Street",
                "title" => "#10, Worukwo Street",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08038350217",
                "about" => "Mr. & Mrs. Nlerum",
                "station_id" => 1
            ],
            [
                "address" => "#21 Worukwo Street, Oroworukwo",
                "title" => "#21 Worukwo Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08037027289",
                "about" => "Dcn. Chinedu Onwunata",
                "station_id" => 1
            ],
            [
                "address" => "# 27 Worukwo Street, Oroworukwo",
                "title" => "# 27 Worukwo Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08037027289",
                "about" => "Osaruchi Mgba",
                "station_id" => 1
            ],
            [
                "address" => "#1 Rebisi Street, Oroworukwo",
                "title" => "#1 Rebisi Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08060812642",
                "about" => "Sis. Rosemary",
                "station_id" => 1
            ],
            [
                "address" => "#5 Rebisi Street, Oroworukwo",
                "title" => "#5 Rebisi Street, Oroworukwo",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08172129996",
                "about" => "Mr. & Mrs. Adele",
                "station_id" => 1
            ],
            [
                "address" => "#15 Worukwo Street ",
                "title" => "#15 Worukwo Street ",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08029936246",
                "about" => "Mr. & Mrs. Boma Opujunju",
                "station_id" => 1
            ],
            [
                "address" => "#2a Rebisi Street ",
                "title" => "#2a Rebisi Street ",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "07031977338",
                "about" => "Mr. & Mrs. Ifeanyi Chukwuocha",
                "station_id" => 1
            ],
            [
                "address" => "#10 Rebisi Street ",
                "title" => "#10 Rebisi Street ",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "07062629989",
                "about" => "Mr Emmanuel",
                "station_id" => 1
            ],
            [
                "address" => "#5 Chief Ichenwo Lane, Off Wokogoloma Street",
                "title" => "#5 Chief Ichenwo Lane, Off Wokogoloma Street",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "07086522771",
                "about" => "Blessing Ichenwo",
                "station_id" => 1
            ],
            [
                "address" => "#2 Rehua ST. Total Village",
                "title" => "#2 Rehua ST. Total Village",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08033576244",
                "about" => "Mr./Mrs Tekan Miller",
                "station_id" => 1
            ],
            [
                "address" => "#5 Rehua Street, Oromenezimgbu, Total Village",
                "title" => "#5 Rehua Street, Oromenezimgbu, Total Village",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08182760130",
                "about" => "Mr/Mrs. Uzochukwu",
                "station_id" => 1
            ],
            [
                "address" => "#9 Ikegwere, Total Village",
                "title" => "#9 Ikegwere, Total Village",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "07035710730",
                "about" => "Mr & Mrs Raymond",
                "station_id" => 1
            ],
            [
                "address" => "#3 Chinda Close, Total Village",
                "title" => "#3 Chinda Close, Total Village",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08133941033",
                "about" => "Mr & Mrs Friday Iberi",
                "station_id" => 1
            ],
            [
                "address" => "#7b Imeni Lane, Total Village",
                "title" => "#7b Imeni Lane, Total Village",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08034912393",
                "about" => "Mr. & Mrs. Peter Etukudo",
                "station_id" => 1
            ],
            [
                "address" => "No 3 Evelyn Close, Off Woji Rd, GRA Phase 2",
                "title" => "No 3 Evelyn Close, Off Woji Rd, GRA Phase 2",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "7031122592",
                "about" => "Mrs Esther Fubara",
                "station_id" => 1
            ],
            [
                "address" => "#4 Prof. Abowei Street, off Tombia, GRA Phase II",
                "title" => "#4 Prof. Abowei Street, off Tombia, GRA Phase II",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08035488011",
                "about" => "Mr. Philip Gilor",
                "station_id" => 1
            ],
            [
                "address" => "#2 Oromenezimgbu, Total Village Off Aba Road",
                "title" => "#2 Oromenezimgbu, Total Village Off Aba Road",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08036703647",
                "about" => "Mr. & Mrs. Newlife",
                "station_id" => 1
            ],
            [
                "address" => "#20 New Heaven Close, off Tombia Street",
                "title" => "#20 New Heaven Close, off Tombia Street",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08053185057",
                "about" => "Mr. & Mrs. Ezenwafor ",
                "station_id" => 1
            ],
            [
                "address" => "10 Ohiamini, off Tombia Extension GRA 2",
                "title" => "10 Ohiamini, off Tombia Extension GRA 2",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08061553131",
                "about" => "Mr. & Mrs. Chuks Odaka ",
                "station_id" => 1
            ],
            [
                "address" => "13B Emeyal street, GRA 1",
                "title" => "13B Emeyal street, GRA 1",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08055248087",
                "about" => "Ben-Kalio John",
                "station_id" => 1
            ],
            [
                "address" => "#12 Bode Street, GRA Phase II",
                "title" => "#12 Bode Street, GRA Phase II",
                "district_id" => 1,
                "province_id" => 4,
                "about" => "Senior Pastor Place",
                "station_id" => 1
            ],
            [
                "address" => "#15 Apara Road GRA 11",
                "title" => "#15 Apara Road GRA 11",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08068192947",
                "about" => "George Anyaehie",
                "station_id" => 1
            ],
            [
                "address" => "MISSION HOUSE 1",
                "title" => "MISSION HOUSE 1",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08035736845",
                "about" => "DCNS BOSEDE ALAO",
                "station_id" => 1
            ],
            [
                "address" => "MISSION HOUSE 2",
                "title" => "MISSION HOUSE 2",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08066933230",
                "about" => "DCNS COLE A",
                "station_id" => 1
            ],
            [
                "address" => "No 3, Ohiamini street, Alomg Oluobasanjo Rd, Amadi Estate",
                "title" => "No 3, Ohiamini street, Alomg Oluobasanjo Rd, Amadi Estate",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "09071429769",
                "about" => "Elaiho Iyobosa",
                "station_id" => 1
            ],
            [
                "address" => "MISSION HOUSE 3",
                "title" => "MISSION HOUSE 3",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08139213846",
                "about" => "DCNS OLUBUMMI F.",
                "station_id" => 1
            ],
            [
                "address" => "#20 Orogbum Crescent GRA",
                "title" => "#20 Orogbum Crescent GRA",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08105204597",
                "about" => "Mr. John",
                "station_id" => 1
            ],
            [
                "address" => "#3 Evelyn Close, off Woji Road, GRA Phase II ",
                "title" => "#3 Evelyn Close, off Woji Road, GRA Phase II ",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "07031122592",
                "about" => "Mrs Esther O. Fubara ",
                "station_id" => 1
            ],
            [
                "address" => "Louis Lane, by Adgate Hotel, Off Abacha Road",
                "title" => "Louis Lane, by Adgate Hotel, Off Abacha Road",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08037047275",
                "about" => "Hon & Dcns Igwe",
                "station_id" => 1
            ],
            [
                "address" => "#55 King Perekule Street, GRA II",
                "title" => "#55 King Perekule Street, GRA II",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08096728147",
                "about" => "Adeboye Elson",
                "station_id" => 1
            ],
            [
                "address" => "#65 Olu-Obasanjo Road",
                "title" => "#65 Olu-Obasanjo Road",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08139616706",
                "about" => "Victoria Moses",
                "station_id" => 1
            ],
            [
                "address" => "#21 Ndashi street off olu Obasanjo Road",
                "title" => "#21 Ndashi street off olu Obasanjo Road",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08034690982",
                "about" => "Clement Maapi",
                "station_id" => 1
            ],
            [
                "address" => "Block A, Flat 8, Oluobasanjo police Baracks",
                "title" => "Block A, Flat 8, Oluobasanjo police Baracks",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08030543705",
                "about" => "Funmi Chritiana Elogie",
                "station_id" => 1
            ],
            [
                "address" => "Blk B, Flat 8, Olu-Obasanjo Police Station",
                "title" => "Blk B, Flat 8, Olu-Obasanjo Police Station",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08069092565",
                "about" => "Mr. James Abbah",
                "station_id" => 1
            ],
            [
                "address" => "Amadi Estate #3 Ohiamini Street along Olu-Obasanjo Rd.",
                "title" => "Amadi Estate #3 Ohiamini Street along Olu-Obasanjo Rd.",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "09071429769",
                "about" => "Eliaho Iyobosa",
                "station_id" => 1
            ],
            [
                "address" => "A/C Quarters, Olu-Obasanjo Police Barrack",
                "title" => "A/C Quarters, Olu-Obasanjo Police Barrack",
                "district_id" => 1,
                "province_id" => 4,
                "phone" => "08037482176",
                "about" => "Franklin Deribe",
                "station_id" => 1
            ],
            [
                "address" => "#1 Faithful Avenue",
                "title" => "#1 Faithful Avenue",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08037961540",
                "about" => "Mr. & Mrs. Gift Fineface",
                "station_id" => 1
            ],
            [
                "address" => "Plot 564 Redeemed Road, Eagle Island",
                "title" => "Plot 564 Redeemed Road, Eagle Island",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08023561551",
                "about" => "Mr. Attih",
                "station_id" => 1
            ],
            [
                "address" => "3 Chief Cyprian Obanafor Street, Off Calvary Temple",
                "title" => "3 Chief Cyprian Obanafor Street, Off Calvary Temple",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08036621310",
                "about" => "Mr. Stephen Ogba",
                "station_id" => 1
            ],
            [
                "address" => "#1 Potter Crescent, Calvary Temple",
                "title" => "#1 Potter Crescent, Calvary Temple",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "00803869339",
                "about" => "Mr. & Mrs. Willy Ayonadu",
                "station_id" => 1
            ],
            [
                "address" => "#11 Fyne Orlu Street, Eagle Island",
                "title" => "#11 Fyne Orlu Street, Eagle Island",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08063165079",
                "about" => "Mr. & Mrs. Nathan",
                "station_id" => 1
            ],
            [
                "address" => "Andoni Junction Eagle Island",
                "title" => "Andoni Junction Eagle Island",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08032389330",
                "about" => "Mr. & Mrs. Soberekon S. Abbey",
                "station_id" => 1
            ],
            [
                "address" => "#8 Ikechi Orusa Street ",
                "title" => "#8 Ikechi Orusa Street ",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08033212638",
                "about" => "Mr. & Mrs. Isaac Ikechi",
                "station_id" => 1
            ],
            [
                "address" => "#5 Strandford off Redeem Rd.  ",
                "title" => "#5 Strandford off Redeem Rd.  ",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08098214357",
                "about" => "Mr & Mrs. Oruma Aliba",
                "station_id" => 1
            ],
            [
                "address" => "#1 Alhaji Orlu Adjacent Calvary Lane",
                "title" => "#1 Alhaji Orlu Adjacent Calvary Lane",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08183939923",
                "about" => "Mr. & Mrs. Uche Orike",
                "station_id" => 1
            ],
            [
                "address" => "#7 Achike Wonodi, off Redeem Rd.",
                "title" => "#7 Achike Wonodi, off Redeem Rd.",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08038659088",
                "about" => "Mr. & Mrs. Benibo Tubotamuno",
                "station_id" => 1
            ],
            [
                "address" => "Plot 250 Calvary Close, Calvary Temple",
                "title" => "Plot 250 Calvary Close, Calvary Temple",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08038659088",
                "about" => "Mr. & Mrs. Tubotamuno L. Benibo",
                "station_id" => 1
            ],
            [
                "address" => "#244 Water Board Road, Eagle Island",
                "title" => "#244 Water Board Road, Eagle Island",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08033098316",
                "about" => "Pastor Tonte Davies",
                "station_id" => 1
            ],
            [
                "address" => "#22 Chief Collins Adiele Street",
                "title" => "#22 Chief Collins Adiele Street",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08038904829",
                "about" => "Emmanuel Tebira",
                "station_id" => 1
            ],
            [
                "address" => "Back of Water Board,Eagle Island",
                "title" => "Back of Water Board,Eagle Island",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08038872164",
                "about" => "Amadi Goodness",
                "station_id" => 1
            ],
            [
                "address" => "#14 Ikechi Orusa Street, Eagle Island",
                "title" => "#14 Ikechi Orusa Street, Eagle Island",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08033014574",
                "about" => "Pst. John Sobrekon",
                "station_id" => 1
            ],
            [
                "address" => "#5 RD 1 Agip Estate ",
                "title" => "#5 RD 1 Agip Estate ",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08035422037",
                "about" => "Mr. & Mrs Michaael 0.",
                "station_id" => 1
            ],
            [
                "address" => "Plot 102 RD 411 Federal Housing Estate Agip",
                "title" => "Plot 102 RD 411 Federal Housing Estate Agip",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08135709041",
                "about" => "Mr. & Mrs. Prince Daminabo",
                "station_id" => 1
            ],
            [
                "address" => "#23 Chief Ehule Str. Agip Estate",
                "title" => "#23 Chief Ehule Str. Agip Estate",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08064260394",
                "about" => "Mr. ThankGod ",
                "station_id" => 1
            ],
            [
                "address" => "2nd Avenue House A close Agip Estate",
                "title" => "2nd Avenue House A close Agip Estate",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "09023905808",
                "about" => "Mr. & Mrs. Goddard Umoh",
                "station_id" => 1
            ],
            [
                "address" => "Rd 21 A close flat B Agip Estate",
                "title" => "Rd 21 A close flat B Agip Estate",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08063577844",
                "about" => "Mr. & Mrs. Okwu",
                "station_id" => 1
            ],
            [
                "address" => "#10 Kapital School Extension, Agip Estate",
                "title" => "#10 Kapital School Extension, Agip Estate",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "07061643723",
                "about" => " Mr. & Mrs Preye Okosi",
                "station_id" => 1
            ],
            [
                "address" => "#4 Col. Larry Crescent, Jonny Lane Off Road 24 Ajip Estate PHC",
                "title" => "#4 Col. Larry Crescent, Jonny Lane Off Road 24 Ajip Estate PHC",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08039739039",
                "about" => "Blessing Okpan",
                "station_id" => 1
            ],
            [
                "address" => "#1 Western Extension,  Road one, by Ajip Estate",
                "title" => "#1 Western Extension,  Road one, by Ajip Estate",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08032710618",
                "about" => "Bro Kingsley Anthony ",
                "station_id" => 1
            ],
            [
                "address" => "#1 Mgbosimini  Rd. Ajip",
                "title" => "#1 Mgbosimini  Rd. Ajip",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08033412382",
                "about" => "Sis Onome Omoleme",
                "station_id" => 1
            ],
            [
                "address" => "Ultimate Road Mgboshimini, 2 Alexzard Str. Agip",
                "title" => "Ultimate Road Mgboshimini, 2 Alexzard Str. Agip",
                "district_id" => 1,
                "province_id" => 5,
                "about" => "Mr. & Mrs. Kobani E. ",
                "station_id" => 1
            ],
            [
                "address" => "#30 Mgboshimini Emeh Avenue, Agip estate",
                "title" => "#30 Mgboshimini Emeh Avenue, Agip estate",
                "district_id" => 1,
                "province_id" => 5,
                "about" => "Pst Kingmate",
                "station_id" => 1
            ],
            [
                "address" => "Flat 1 A close #27 Aip Estate Navy Barrack Gip",
                "title" => "Flat 1 A close #27 Aip Estate Navy Barrack Gip",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "07087523746",
                "about" => "Dcns. Bose",
                "station_id" => 1
            ],
            [
                "address" => "#13 Johnny Lane , Rd. 24 Agip Est",
                "title" => "#13 Johnny Lane , Rd. 24 Agip Est",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08035418883",
                "about" => "Pst. Gbenzi Gbanaibolou",
                "station_id" => 1
            ],
            [
                "address" => "#2 Savannah Estate Rd 24 Agip Est.",
                "title" => "#2 Savannah Estate Rd 24 Agip Est.",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "80034534048",
                "about" => "Mr & Mrs. Omoba",
                "station_id" => 1
            ],
            [
                "address" => "#5 Chief Tiger Close, Mini Orlu, Off Ada George",
                "title" => "#5 Chief Tiger Close, Mini Orlu, Off Ada George",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08036736524",
                "about" => "Bro Peter Abbey",
                "station_id" => 1
            ],
            [
                "address" => "Road 1 Western Extension, Agip Estate",
                "title" => "Road 1 Western Extension, Agip Estate",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08032710618",
                "about" => "Bro. Kingsley Anthony",
                "station_id" => 1
            ],
            [
                "address" => "Mgbuoshimiri Junction ",
                "title" => "Mgbuoshimiri Junction ",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "09054056206",
                "about" => "Sis Omoleme Cynthia",
                "station_id" => 1
            ],
            [
                "address" => "7 Willson Abali Street, Off Road 24 Ajip estate",
                "title" => "7 Willson Abali Street, Off Road 24 Ajip estate",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08036757881",
                "about" => "Mr. & Mrs. Nwoko",
                "station_id" => 1
            ],
            [
                "address" => "7A  NNOKAM STREET, OFF ADA GEORGE",
                "title" => "7A  NNOKAM STREET, OFF ADA GEORGE",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08036666654",
                "about" => "SIS. CYNTHIA GEORGE",
                "station_id" => 1
            ],
            [
                "address" => "7B  NNOKAM STREET, OFF ADA GEORGE",
                "title" => "7B  NNOKAM STREET, OFF ADA GEORGE",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08135733277",
                "about" => "SIS .  PROMISE IFEANYI",
                "station_id" => 1
            ],
            [
                "address" => "11 KENEDESIA CLOSE, BY AGUNWA HALL, OFF ADA GEORGE",
                "title" => "11 KENEDESIA CLOSE, BY AGUNWA HALL, OFF ADA GEORGE",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08034668790",
                "about" => "SIS., LYDIA ERNEST JOHN",
                "station_id" => 1
            ],
            [
                "address" => "6 EKE STREET, 6TH AVENUE, OFF ADA GEORGE, MILE 4",
                "title" => "6 EKE STREET, 6TH AVENUE, OFF ADA GEORGE, MILE 4",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "07033032528",
                "about" => "BRO. PROMISE KPEGEDIBA",
                "station_id" => 1
            ],
            [
                "address" => "3 PASTOR CHIJIOKE IHUNWO STREET, OFF ADA GEORGE, MILE 4",
                "title" => "3 PASTOR CHIJIOKE IHUNWO STREET, OFF ADA GEORGE, MILE 4",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08053410005",
                "about" => "PASTOR.  CHIJIOKE IHUNWO",
                "station_id" => 1
            ],
            [
                "address" => "1 WESTERN EXTENSION, ROAD ONE, AGIP EST. BY COMMISSIONER",
                "title" => "1 WESTERN EXTENSION, ROAD ONE, AGIP EST. BY COMMISSIONER",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08032710618",
                "about" => "BRO. KINGSLEY ANTHONY",
                "station_id" => 1
            ],
            [
                "address" => "#20 Enwume Avenue, Off Ada George Road. ",
                "title" => "#20 Enwume Avenue, Off Ada George Road. ",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "09033859499",
                "about" => "Dr. Chizaram Enwerem ",
                "station_id" => 1
            ],
            [
                "address" => "1 MGBUOSHIMINI  ROAD, AGIP ESTATE",
                "title" => "1 MGBUOSHIMINI  ROAD, AGIP ESTATE",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08033412382",
                "about" => "SIS. ONOME OMOLEME",
                "station_id" => 1
            ],
            [
                "address" => "16 LOCATION ROAD, BY OPEN DOORS, ADA GEORGE",
                "title" => "16 LOCATION ROAD, BY OPEN DOORS, ADA GEORGE",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08038667357",
                "about" => "DCNS. PATIENCE  ENEBELI",
                "station_id" => 1
            ],
            [
                "address" => "45 HON. MAXWELL UWABIE CLOSE, OFF ADA GEORGE",
                "title" => "45 HON. MAXWELL UWABIE CLOSE, OFF ADA GEORGE",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "09095033931",
                "about" => "MADAM MBONG OKON",
                "station_id" => 1
            ],
            [
                "address" => "26 ODEBE STREET, RUMUOKE, ADA GEORGE",
                "title" => "26 ODEBE STREET, RUMUOKE, ADA GEORGE",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08036699985",
                "about" => "DCN. EMMA OLOWU",
                "station_id" => 1
            ],
            [
                "address" => "14 EGURUGWU ST., OFF  IWOFE ROAD, IWOFE",
                "title" => "14 EGURUGWU ST., OFF  IWOFE ROAD, IWOFE",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08142417317",
                "about" => "SIS.  JOY EZE",
                "station_id" => 1
            ],
            [
                "address" => " NO. 16 CHIEF AMADI CLOSE, MICHAEL ROAD, CHINDA",
                "title" => " NO. 16 CHIEF AMADI CLOSE, MICHAEL ROAD, CHINDA",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08030855818",
                "about" => "BRO. OBIORA AGU",
                "station_id" => 1
            ],
            [
                "address" => "8 ELBENE STREET, BY OPEN DOORS, OFF ADA GEORGE",
                "title" => "8 ELBENE STREET, BY OPEN DOORS, OFF ADA GEORGE",
                "district_id" => 1,
                "province_id" => 5,
                "station_id" => 1
            ],
            [
                "address" => "4/5 ST. JOHN STREET, J.J. COURT EST. MGBUOBA",
                "title" => "4/5 ST. JOHN STREET, J.J. COURT EST. MGBUOBA",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08033122641",
                "about" => "PASTOR.  RUFUS ADENIYI",
                "station_id" => 1
            ],
            [
                "address" => "10 GODS MIRACLE AVENUE, UNITY EST. CHINDA, BY ADA GEORGE",
                "title" => "10 GODS MIRACLE AVENUE, UNITY EST. CHINDA, BY ADA GEORGE",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08038948283",
                "about" => "BRO. DAMILOLA THOMAS",
                "station_id" => 1
            ],
            [
                "address" => "EDUWAY CHRISTIAN LEARNING CENTER, 18 OKABIE  ST., BY CHINDA",
                "title" => "EDUWAY CHRISTIAN LEARNING CENTER, 18 OKABIE  ST., BY CHINDA",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08032017467",
                "about" => "Mrs. Ibironke Taiwo Olowu",
                "station_id" => 1
            ],
            [
                "address" => "#36 fulfillment Avenue off chief douglas Road Iwofe Road",
                "title" => "#36 fulfillment Avenue off chief douglas Road Iwofe Road",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08035411658",
                "about" => "Mr. & Mrs. Nanakumo",
                "station_id" => 1
            ],
            [
                "address" => "#3 Divine Close, Off St. John RD by Car wash",
                "title" => "#3 Divine Close, Off St. John RD by Car wash",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08035456373",
                "about" => "Mr. & Mrs. Tubotamuno Horsfall",
                "station_id" => 1
            ],
            [
                "address" => "Plot 7 Owabie close, Off Iwofe road",
                "title" => "Plot 7 Owabie close, Off Iwofe road",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08026138920",
                "about" => "Mr. & Mrs. Uchenna Ibe",
                "station_id" => 1
            ],
            [
                "address" => "#30 Chinda Street ",
                "title" => "#30 Chinda Street ",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08063790574",
                "about" => "Pst. & DCNS. V. Nwankwo",
                "station_id" => 1
            ],
            [
                "address" => "#62 Chinda Road, Off Ada George Road",
                "title" => "#62 Chinda Road, Off Ada George Road",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08030856161",
                "about" => "Pst & Dcns ThankGod Fibika",
                "station_id" => 1
            ],
            [
                "address" => "#9 Emmanuel Avenue, Off Aker Road, Rumuolumeni",
                "title" => "#9 Emmanuel Avenue, Off Aker Road, Rumuolumeni",
                "district_id" => 1,
                "province_id" => 5,
                "phone" => "08035456373",
                "about" => "DCNS. Rita Kariba Botoye",
                "station_id" => 1
            ],
            [
                "address" => "Lane 2, Block 4, Marine Base Estate",
                "title" => "Lane 2, Block 4, Marine Base Estate",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08033342782",
                "about" => "Mr. Ntiego George",
                "station_id" => 1
            ],
            [
                "address" => "Lane 2, Block 3, Marine Base Estate",
                "title" => "Lane 2, Block 3, Marine Base Estate",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08037086899",
                "about" => "Mrs Grace Fila",
                "station_id" => 1
            ],
            [
                "address" => "#14 Medy Lane, Ada George Polo, Marine Base",
                "title" => "#14 Medy Lane, Ada George Polo, Marine Base",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "07034409748",
                "about" => "Mrs. Nora Kelvin Ibinabo",
                "station_id" => 1
            ],
            [
                "address" => "Lane 2, Block 6, Marine Base Estate",
                "title" => "Lane 2, Block 6, Marine Base Estate",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08033342782",
                "about" => "Dcns. Obiri Gloria",
                "station_id" => 1
            ],
            [
                "address" => "#6 Olomu Polo, Marine Base",
                "title" => "#6 Olomu Polo, Marine Base",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08033507960",
                "about" => "Dcn. Philimon Abiye",
                "station_id" => 1
            ],
            [
                "address" => "Lane 13 Block 15 Marine Base Estate",
                "title" => "Lane 13 Block 15 Marine Base Estate",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08068729854",
                "about" => "Sister Divine ",
                "station_id" => 1
            ],
            [
                "address" => "6th Avenue, Eastern By-Pass Marine Base",
                "title" => "6th Avenue, Eastern By-Pass Marine Base",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08109116730",
                "about" => "Sis Adebola",
                "station_id" => 1
            ],
            [
                "address" => "#139  Frisika polo, Marine Base",
                "title" => "#139  Frisika polo, Marine Base",
                "district_id" => 1,
                "province_id" => 6,
                "about" => "Mr Stephen",
                "station_id" => 1
            ],
            [
                "address" => "Dockyard Water Front 1",
                "title" => "Dockyard Water Front 1",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08188582037",
                "about" => "Bro Tokube Oba",
                "station_id" => 1
            ],
            [
                "address" => "19c Railway Quarters Bundu 3 ",
                "title" => "19c Railway Quarters Bundu 3 ",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08062912862",
                "about" => "Kingsley Andison",
                "station_id" => 1
            ],
            [
                "address" => "Railway Quarters Bundu Last B/Stop (Bundu 1)",
                "title" => "Railway Quarters Bundu Last B/Stop (Bundu 1)",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "09037424118",
                "about" => "Sis. Elizabeth Stephen",
                "station_id" => 1
            ],
            [
                "address" => "NPA Qtrs,  Marine Siding, Bundu",
                "title" => "NPA Qtrs,  Marine Siding, Bundu",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08030954054",
                "about" => "Mr & Mrs Mary S. Thompson",
                "station_id" => 1
            ],
            [
                "address" => "Police Children School Barracks",
                "title" => "Police Children School Barracks",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08053184153",
                "about" => "Bro Anthony Uchegbu",
                "station_id" => 1
            ],
            [
                "address" => "#110 Aggrey Road ",
                "title" => "#110 Aggrey Road ",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08032788327",
                "about" => "Henry Omangi",
                "station_id" => 1
            ],
            [
                "address" => "Prisons Water front ",
                "title" => "Prisons Water front ",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "07036835111",
                "about" => "Bro Gift Kenoye",
                "station_id" => 1
            ],
            [
                "address" => "Bundu 2, Behind State School",
                "title" => "Bundu 2, Behind State School",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "07034456583",
                "about" => "Bro. Etim Udoh",
                "station_id" => 1
            ],
            [
                "address" => "#54 Bonny Street",
                "title" => "#54 Bonny Street",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08055469565",
                "about" => "Felicia Jumbo",
                "station_id" => 1
            ],
            [
                "address" => "#27 Potts Johnson Street",
                "title" => "#27 Potts Johnson Street",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08068857222",
                "about" => "Bro Soso Atorudibo",
                "station_id" => 1
            ],
            [
                "address" => "#4 Creek Road PHC",
                "title" => "#4 Creek Road PHC",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08135951793",
                "about" => "Elder Ere Bristol",
                "station_id" => 1
            ],
            [
                "address" => "Ibimina Polo Bille W/Front Opp 47 Creek Rd",
                "title" => "Ibimina Polo Bille W/Front Opp 47 Creek Rd",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08065428122",
                "about" => "Mrs. Elizbeth Jimmy",
                "station_id" => 1
            ],
            [
                "address" => "#18 Potts Johnson Street",
                "title" => "#18 Potts Johnson Street",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "07067451570",
                "about" => "Sis. Maria Ikharu",
                "station_id" => 1
            ],
            [
                "address" => "#114 Aggrey Rd. Phc ",
                "title" => "#114 Aggrey Rd. Phc ",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08166397854",
                "about" => "Bro. Ibinabo Igonikon Igonikon",
                "station_id" => 1
            ],
            [
                "address" => "#13 Estate Rd.Railway quarters off Industry road ",
                "title" => "#13 Estate Rd.Railway quarters off Industry road ",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08068409982",
                "about" => "Bro Isaac Humphery",
                "station_id" => 1
            ],
            [
                "address" => "128 Victory street phc",
                "title" => "128 Victory street phc",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08023148162",
                "about" => "bro tonya wilson ",
                "station_id" => 1
            ],
            [
                "address" => "#35 Lagos Street, PHC",
                "title" => "#35 Lagos Street, PHC",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "80391362311",
                "about" => "Sis Mercy Biokorogha",
                "station_id" => 1
            ],
            [
                "address" => "#13 Barthust Street, Old Port Harcourt Township ",
                "title" => "#13 Barthust Street, Old Port Harcourt Township ",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08033997091",
                "about" => "Bro Bernard",
                "station_id" => 1
            ],
            [
                "address" => "#1 Bende Street Phc",
                "title" => "#1 Bende Street Phc",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08035577002",
                "about" => "Sis. Timi West",
                "station_id" => 1
            ],
            [
                "address" => "#40 Churchill Street",
                "title" => "#40 Churchill Street",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08033406117",
                "about" => "DCN Dennis Fibika",
                "station_id" => 1
            ],
            [
                "address" => "#3 Okarki Street Borikiri",
                "title" => "#3 Okarki Street Borikiri",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "07069637133",
                "about" => "DCN. Benibo Davies",
                "station_id" => 1
            ],
            [
                "address" => "UPE Sandfield 2",
                "title" => "UPE Sandfield 2",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08036610738",
                "about" => "Mrs Francisca Akeme",
                "station_id" => 1
            ],
            [
                "address" => "Ibadan WaterFront viewing centre",
                "title" => "Ibadan WaterFront viewing centre",
                "district_id" => 1,
                "province_id" => 6,
                "about" => "Viewing center",
                "station_id" => 1
            ],
            [
                "address" => "UPE Sandfield 1",
                "title" => "UPE Sandfield 1",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08036670741",
                "about" => "Dcn. R. R. George",
                "station_id" => 1
            ],
            [
                "address" => "24 Capt. Amagala Street",
                "title" => "24 Capt. Amagala Street",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08064099199",
                "about" => "Mrs. Nengi Charles",
                "station_id" => 1
            ],
            [
                "address" => "Baptist Waterfront 1",
                "title" => "Baptist Waterfront 1",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "07034292523",
                "about" => "Mrs. Chioma Daka",
                "station_id" => 1
            ],
            [
                "address" => "Baptist Waterfront 2",
                "title" => "Baptist Waterfront 2",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08066335371",
                "about" => "Bro Emmanuel Reuben",
                "station_id" => 1
            ],
            [
                "address" => "#18 Ndoki Street",
                "title" => "#18 Ndoki Street",
                "district_id" => 1,
                "province_id" => 6,
                "phone" => "08035006146",
                "about" => "Dame Ayibatonye Hanson",
                "station_id" => 1
            ],
            [
                "address" => "#4 Owuru Lane, Off Nkpogu Road",
                "title" => "#4 Owuru Lane, Off Nkpogu Road",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08068519786",
                "about" => "Sis. Queen Owuru",
                "station_id" => 1
            ],
            [
                "address" => "#3 Wolucho Street Rumukalagbor",
                "title" => "#3 Wolucho Street Rumukalagbor",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08033425075",
                "about" => "Sis. Goodness Jaja",
                "station_id" => 1
            ],
            [
                "address" => "Elder Lazarus close 1, Rumukalagbor ",
                "title" => "Elder Lazarus close 1, Rumukalagbor ",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08037094957",
                "about" => "Sis. Maureen Iwari",
                "station_id" => 1
            ],
            [
                "address" => "#4 Owhor Close, Rumukalagbor",
                "title" => "#4 Owhor Close, Rumukalagbor",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08039408773",
                "about" => "Mr. & Mrs. Divine Igbokwu",
                "station_id" => 1
            ],
            [
                "address" => "10b Chf. Daniel Igwe Street. Nkpogu",
                "title" => "10b Chf. Daniel Igwe Street. Nkpogu",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "09026682573",
                "about" => "Mr. & Mrs. Joseph/Maureen Micah",
                "station_id" => 1
            ],
            [
                "address" => "#1 Link Road Rumukalagbor",
                "title" => "#1 Link Road Rumukalagbor",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08064165642",
                "about" => "Sis Happiness Anayo",
                "station_id" => 1
            ],
            [
                "address" => "54 Nkpogu Road, Nkpogu",
                "title" => "54 Nkpogu Road, Nkpogu",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "07030093764",
                "about" => "Mr. & Mrs. Daniel Chidi Okereke",
                "station_id" => 1
            ],
            [
                "address" => "#2 Chiadiuka Close, Rumukalagbor",
                "title" => "#2 Chiadiuka Close, Rumukalagbor",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08035471990",
                "about" => "Mr/Mrs A. Okereke",
                "station_id" => 1
            ],
            [
                "address" => "#10 Nkpogu Road",
                "title" => "#10 Nkpogu Road",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08039343877",
                "about" => "Benedith Kpughizini",
                "station_id" => 1
            ],
            [
                "address" => "#4B Chief Ntagbu Street, Off Ohiamini",
                "title" => "#4B Chief Ntagbu Street, Off Ohiamini",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08030498856",
                "about" => "Mr. & Mrs. Etitinwo",
                "station_id" => 1
            ],
            [
                "address" => "#6 Igbogo Street, Ohiamini, Elekahia",
                "title" => "#6 Igbogo Street, Ohiamini, Elekahia",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "07057040977",
                "about" => "DCN/DCNS. Olowu/Favour",
                "station_id" => 1
            ],
            [
                "address" => "#40 Boms Avenue, Elekahia",
                "title" => "#40 Boms Avenue, Elekahia",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08033367788",
                "about" => "Mrs. Kate Nwanze",
                "station_id" => 1
            ],
            [
                "address" => "#4 Ochiri Street, Elekahia",
                "title" => "#4 Ochiri Street, Elekahia",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08159689436",
                "about" => "Mr. & Mrs. Nwipa Pius",
                "station_id" => 1
            ],
            [
                "address" => "#1 Boms Str. Elekahia",
                "title" => "#1 Boms Str. Elekahia",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08033413322",
                "about" => "DCN. & Mrs. Ekun Goodluck Ooke",
                "station_id" => 1
            ],
            [
                "address" => "#4 Owhor Avenue, Ohiamini Elekahia",
                "title" => "#4 Owhor Avenue, Ohiamini Elekahia",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08032931389",
                "about" => "Mr. & Mrs. Casmir Ahuruezewegwa",
                "station_id" => 1
            ],
            [
                "address" => "Japan Extension red Estate, Elekahia",
                "title" => "Japan Extension red Estate, Elekahia",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "07034374440",
                "about" => "Mr. & Mrs. Famous Emionwele",
                "station_id" => 1
            ],
            [
                "address" => "#104 Ogbonda street elekahia",
                "title" => "#104 Ogbonda street elekahia",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08033166323",
                "about" => "Sis. Uchechi Williams",
                "station_id" => 1
            ],
            [
                "address" => "#4 Atugbo Street, by two sisters B/Stop Elekahia",
                "title" => "#4 Atugbo Street, by two sisters B/Stop Elekahia",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08139735901",
                "about" => "Mr. & Mrs. Obinna Eze",
                "station_id" => 1
            ],
            [
                "address" => " 2nd Ave, Blk 13, Flat 2, Est.",
                "title" => " 2nd Ave, Blk 13, Flat 2, Est.",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08033387735",
                "about" => "DCNS. Ihuoma Chuku ",
                "station_id" => 1
            ],
            [
                "address" => "3rd Avenue, Blk 6, Flat 5, Est.",
                "title" => "3rd Avenue, Blk 6, Flat 5, Est.",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08035060359",
                "about" => "DCNS. Faith Oke",
                "station_id" => 1
            ],
            [
                "address" => "#17A, 5th Street,Est.",
                "title" => "#17A, 5th Street,Est.",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08037062582",
                "about" => "DCNS. Peace Allagoa",
                "station_id" => 1
            ],
            [
                "address" => "#52 Circular Road, Est.",
                "title" => "#52 Circular Road, Est.",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08028522551",
                "about" => "Mrs. Ifedoro",
                "station_id" => 1
            ],
            [
                "address" => "Close 8, Blk 9, Flat 2,Est.",
                "title" => "Close 8, Blk 9, Flat 2,Est.",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "09027960747",
                "about" => "Sis. Maureen Okolo",
                "station_id" => 1
            ],
            [
                "address" => "#3 Chuku Str., Mechanic Village, Elekahia",
                "title" => "#3 Chuku Str., Mechanic Village, Elekahia",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08037984079",
                "about" => "Dr. Elyon",
                "station_id" => 1
            ],
            [
                "address" => "#4B Etitinwo Street, Elekahia",
                "title" => "#4B Etitinwo Street, Elekahia",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08130745181",
                "about" => "Sis. Getrude Etitinwo",
                "station_id" => 1
            ],
            [
                "address" => "#14B Etitinwo (Inside) Elekahia",
                "title" => "#14B Etitinwo (Inside) Elekahia",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08144247071",
                "about" => "Mr. & Mrs. Maiyaki Garba",
                "station_id" => 1
            ],
            [
                "address" => "#11 Mbaise Street",
                "title" => "#11 Mbaise Street",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08096018285",
                "about" => "Bro. Uche",
                "station_id" => 1
            ],
            [
                "address" => "#1 Uyo Street Extention, Rumuomasi",
                "title" => "#1 Uyo Street Extention, Rumuomasi",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08035082261",
                "about" => "Bro Collins Onwumere",
                "station_id" => 1
            ],
            [
                "address" => "#20 Arochukwu Street, Rumuomasi",
                "title" => "#20 Arochukwu Street, Rumuomasi",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08038712617",
                "about" => "DCN. Chidi Nwofor",
                "station_id" => 1
            ],
            [
                "address" => "#4B Jumbo Close, Rumuomasi",
                "title" => "#4B Jumbo Close, Rumuomasi",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08035519161",
                "about" => "DCNS. Esther Amadi",
                "station_id" => 1
            ],
            [
                "address" => "#6 Chinda Street",
                "title" => "#6 Chinda Street",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08060122956",
                "about" => "Sis. Sylvester Aramide ",
                "station_id" => 1
            ],
            [
                "address" => "#18 Road 2, Rumuobiakani Estate",
                "title" => "#18 Road 2, Rumuobiakani Estate",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "07064529829",
                "about" => "Elder Iloo Phimia",
                "station_id" => 1
            ],
            [
                "address" => "#9b, Rd 4 Oginigba New Layout PHC",
                "title" => "#9b, Rd 4 Oginigba New Layout PHC",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08060870082",
                "about" => "Mr. & Mrs. Harrison Dike",
                "station_id" => 1
            ],
            [
                "address" => "#30 Ogbunike Street",
                "title" => "#30 Ogbunike Street",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08037096441",
                "about" => "Bro. Oqwy Osakwe",
                "station_id" => 1
            ],
            [
                "address" => "#79 Stadium Rd. ",
                "title" => "#79 Stadium Rd. ",
                "district_id" => 1,
                "province_id" => 7,
                "station_id" => 1
            ],
            [
                "address" => "#33 Chinda Avenue",
                "title" => "#33 Chinda Avenue",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08033100401",
                "about" => "Boma Jack",
                "station_id" => 1
            ],
            [
                "address" => "#22 Chukwu Street",
                "title" => "#22 Chukwu Street",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08038876587",
                "about" => "Sis Fortune Okorie",
                "station_id" => 1
            ],
            [
                "address" => "#8 Agumagu Street",
                "title" => "#8 Agumagu Street",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08064118411",
                "about" => "Ifeanyi Nwachi",
                "station_id" => 1
            ],
            [
                "address" => "#3 Fetona close, Off Mummy B Church Road",
                "title" => "#3 Fetona close, Off Mummy B Church Road",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08028344395",
                "about" => "Sis. Success Abaye",
                "station_id" => 1
            ],
            [
                "address" => "#1 Emmanuel Close",
                "title" => "#1 Emmanuel Close",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08030890568",
                "about" => "Innocent Nwaneri",
                "station_id" => 1
            ],
            [
                "address" => "#9 Olozu Street",
                "title" => "#9 Olozu Street",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08033384450",
                "about" => "Joyce Chinweuba",
                "station_id" => 1
            ],
            [
                "address" => "#11 Wopara Street, Rumuomasi",
                "title" => "#11 Wopara Street, Rumuomasi",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "07032401805",
                "about" => "Nnamdi Mwabeke",
                "station_id" => 1
            ],
            [
                "address" => "#14 Orgwua  Street, Orazi",
                "title" => "#14 Orgwua  Street, Orazi",
                "district_id" => 1,
                "province_id" => 7,
                "phone" => "08033093105",
                "about" => "Joyce Okpewono",
                "station_id" => 1
            ],
            [
                "address" => "Plot 13 School Road, Rainbow Town",
                "title" => "Plot 13 School Road, Rainbow Town",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "07038087479",
                "about" => "Tomoniabie Josephine",
                "station_id" => 1
            ],
            [
                "address" => "Road 313, House 12 Trans-Amadi Gardens",
                "title" => "Road 313, House 12 Trans-Amadi Gardens",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033169940",
                "about" => "Dcn & Mrs Emmanuel Bassey",
                "station_id" => 1
            ],
            [
                "address" => "#10 Bank Anthony, Off Ordinance",
                "title" => "#10 Bank Anthony, Off Ordinance",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08038569558",
                "about" => "Francis Jaja",
                "station_id" => 1
            ],
            [
                "address" => "#1 Amadi Roundabout, Amadi",
                "title" => "#1 Amadi Roundabout, Amadi",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08030861181",
                "about" => "Sis Victoria",
                "station_id" => 1
            ],
            [
                "address" => "Block 1 Fed Housing Estate, Amadi Ama",
                "title" => "Block 1 Fed Housing Estate, Amadi Ama",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08034200987",
                "about" => "Mr. & Mrs. Demola",
                "station_id" => 1
            ],
            [
                "address" => "#20 Oluwan Str, off Abuloma",
                "title" => "#20 Oluwan Str, off Abuloma",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08039422663",
                "about" => "Sis Sonia",
                "station_id" => 1
            ],
            [
                "address" => "# 57 Circular Rd, Amadi Ama",
                "title" => "# 57 Circular Rd, Amadi Ama",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033365916",
                "about" => "Elder George",
                "station_id" => 1
            ],
            [
                "address" => "Road 314, house 13 Trans Amadi Gardens",
                "title" => "Road 314, house 13 Trans Amadi Gardens",
                "district_id" => 1,
                "province_id" => 8,
                "about" => "Mrs Nkeiru Allagoa",
                "station_id" => 1
            ],
            [
                "address" => "Road 317 House 5 Trans Amadi Gardens",
                "title" => "Road 317 House 5 Trans Amadi Gardens",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033241099",
                "about" => "Pst. Akuma",
                "station_id" => 1
            ],
            [
                "address" => "Federal Housing opp Harris hotel Amadi Ama",
                "title" => "Federal Housing opp Harris hotel Amadi Ama",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08038104433",
                "about" => "Bro Jimmy Etim",
                "station_id" => 1
            ],
            [
                "address" => "Road 22 close A, No.6 Amadi Gardens",
                "title" => "Road 22 close A, No.6 Amadi Gardens",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08034068650",
                "about" => "Mrs Timi Silver",
                "station_id" => 1
            ],
            [
                "address" => "Plot 100 Chief Wonwu Ave, off Ordinance Rd, Trans Amadi",
                "title" => "Plot 100 Chief Wonwu Ave, off Ordinance Rd, Trans Amadi",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08034209537/08035838252",
                "about" => "Mr & Mrs Edward",
                "station_id" => 1
            ],
            [
                "address" => "House 2 Close D, Amadi Gardens",
                "title" => "House 2 Close D, Amadi Gardens",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08037029811",
                "about" => "Sis Ibifiri Olungwe",
                "station_id" => 1
            ],
            [
                "address" => "3 Christer Street, Amadi Ama",
                "title" => "3 Christer Street, Amadi Ama",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "07060855990",
                "about" => "Mrs Abiye Sokari",
                "station_id" => 1
            ],
            [
                "address" => "# 23 vhed street,off Abuloma, Amadi",
                "title" => "# 23 vhed street,off Abuloma, Amadi",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "07039449119",
                "about" => "Mr. & Mrs. Melford ",
                "station_id" => 1
            ],
            [
                "address" => "#10 IKURU STREET OFF TMC ESTATE Rd. Ozuboko, Abuloma",
                "title" => "#10 IKURU STREET OFF TMC ESTATE Rd. Ozuboko, Abuloma",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08066629519",
                "about" => "BRO STANLEY AKPANA",
                "station_id" => 1
            ],
            [
                "address" => "#13 king Jesus street peace drive Abuloma road ",
                "title" => "#13 king Jesus street peace drive Abuloma road ",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08039339340",
                "about" => "Stanley O. Nchege",
                "station_id" => 1
            ],
            [
                "address" => "#63 Gokana Street, TMC Estate, Abuloma",
                "title" => "#63 Gokana Street, TMC Estate, Abuloma",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033107300",
                "about" => "DCNS. Charity Ibulubo",
                "station_id" => 1
            ],
            [
                "address" => "#75 Abuloma Road, PHC ",
                "title" => "#75 Abuloma Road, PHC ",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033413470",
                "about" => "Pst & Dcns Kayode Ampitan",
                "station_id" => 1
            ],
            [
                "address" => "#5C Ajuwa Close off FGGC Road, Abuloma",
                "title" => "#5C Ajuwa Close off FGGC Road, Abuloma",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08030855229",
                "about" => "DCN. Otonye Warmate",
                "station_id" => 1
            ],
            [
                "address" => "#23 Masa Rd, Off Abuloma Rd",
                "title" => "#23 Masa Rd, Off Abuloma Rd",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033401444",
                "about" => " Herbert Tamuno-Tonye Oruwari",
                "station_id" => 1
            ],
            [
                "address" => "19 CHIEF CHARLES STREET ABULOMA ",
                "title" => "19 CHIEF CHARLES STREET ABULOMA ",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08151463112",
                "about" => "Mr & Mrs IGOLIMA ",
                "station_id" => 1
            ],
            [
                "address" => "2ND GATE FIMIE ROAD ABULOMA ",
                "title" => "2ND GATE FIMIE ROAD ABULOMA ",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08064898760",
                "about" => "BRO ANDY ETIMBUK ",
                "station_id" => 1
            ],
            [
                "address" => "# 4 HUMPHERY ESTATE TERE AMA Estate  ",
                "title" => "# 4 HUMPHERY ESTATE TERE AMA Estate  ",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08037100982",
                "about" => "DATA LILLY TARIAH ",
                "station_id" => 1
            ],
            [
                "address" => "Flat 1, #26 Health Centre Road, Okuru-Ama, PHC",
                "title" => "Flat 1, #26 Health Centre Road, Okuru-Ama, PHC",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08030763462",
                "about" => "Bro Iyowa Milton Abibo",
                "station_id" => 1
            ],
            [
                "address" => "#22 Fimie Rd., Tere-Ama",
                "title" => "#22 Fimie Rd., Tere-Ama",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08034073638",
                "about" => "Mina George ",
                "station_id" => 1
            ],
            [
                "address" => "SANTOS HOUSE TERE AMA ",
                "title" => "SANTOS HOUSE TERE AMA ",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08037588006",
                "about" => "PST KOLA OPOOLA ",
                "station_id" => 1
            ],
            [
                "address" => "#42 DFFRI/Fimie Rd. off Abuloma rd.",
                "title" => "#42 DFFRI/Fimie Rd. off Abuloma rd.",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08036722231",
                "about" => "Faabiawari Mark",
                "station_id" => 1
            ],
            [
                "address" => "House #1 Oilview Estate",
                "title" => "House #1 Oilview Estate",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033401960",
                "about" => "Dcn and Dcns. Godwin Etim ",
                "station_id" => 1
            ],
            [
                "address" => "House 2, Oil View Estate, Total Gospel RD",
                "title" => "House 2, Oil View Estate, Total Gospel RD",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08037163470",
                "about" => "DCN & DCNs. Etim",
                "station_id" => 1
            ],
            [
                "address" => "#1b Timbo Close",
                "title" => "#1b Timbo Close",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08067940099",
                "about" => "Bro. & Sis. Erhoho",
                "station_id" => 1
            ],
            [
                "address" => "#8 Gobo Close",
                "title" => "#8 Gobo Close",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08037045782",
                "about" => "Pst. & DCNS. C. Ajagba",
                "station_id" => 1
            ],
            [
                "address" => "12 Captain Ibiba street",
                "title" => "12 Captain Ibiba street",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08135028122",
                "about" => "Madam Adline Promise",
                "station_id" => 1
            ],
            [
                "address" => "#8 Otopo Close",
                "title" => "#8 Otopo Close",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08037045782",
                "about" => "Pst. & DCNS. C. Ajagba",
                "station_id" => 1
            ],
            [
                "address" => "#1 Dr. Orubo Close, Off Campbell Ave, (Somitel Road) ",
                "title" => "#1 Dr. Orubo Close, Off Campbell Ave, (Somitel Road) ",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08035400797",
                "about" => "DCN. & Sis. Chigozi Omodu",
                "station_id" => 1
            ],
            [
                "address" => "#1 illotombi close TMC, B.Gate",
                "title" => "#1 illotombi close TMC, B.Gate",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08038051838",
                "about" => "Mr. & Mrs Okafor",
                "station_id" => 1
            ],
            [
                "address" => "House 13 Eucuos Estate ",
                "title" => "House 13 Eucuos Estate ",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08181330031",
                "about" => "Bro & Sis. Alex Orga",
                "station_id" => 1
            ],
            [
                "address" => "#3 Manny Close off campbell avenue",
                "title" => "#3 Manny Close off campbell avenue",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08036727285",
                "about" => "Bro. & Sis.Churchill Purero",
                "station_id" => 1
            ],
            [
                "address" => "B05 Golf Estate",
                "title" => "B05 Golf Estate",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033129884",
                "about" => "Bro. & Sis. Omiete ",
                "station_id" => 1
            ],
            [
                "address" => "15 Rex Dagogo Jack Avenue",
                "title" => "15 Rex Dagogo Jack Avenue",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08138508172",
                "about" => "Bro. & Sis Moses Oguzi",
                "station_id" => 1
            ],
            [
                "address" => "#4 Pentaon Close, Off JC street",
                "title" => "#4 Pentaon Close, Off JC street",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08107019729",
                "about" => "Mr & Mrs Philip Odafe",
                "station_id" => 1
            ],
            [
                "address" => "#8 Lizzys Court, Abraham Avenue, Off Somitel, ",
                "title" => "#8 Lizzys Court, Abraham Avenue, Off Somitel, ",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08063699223",
                "about" => "Sis Judith Maido",
                "station_id" => 1
            ],
            [
                "address" => "#5 Otopo Close, Off Joe Allogoa, Off Odili Road",
                "title" => "#5 Otopo Close, Off Joe Allogoa, Off Odili Road",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08036624041",
                "about" => "Mr. Dimabo Jack",
                "station_id" => 1
            ],
            [
                "address" => "#24 Doxa Road, Off Odili Road",
                "title" => "#24 Doxa Road, Off Odili Road",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033126078",
                "about" => "DCN. Theo Edeko",
                "station_id" => 1
            ],
            [
                "address" => "#32 Elizabeth Alfred , Off Doxa Road, Off Odili Road",
                "title" => "#32 Elizabeth Alfred , Off Doxa Road, Off Odili Road",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08069237983",
                "about" => "Mr. Uche Michael",
                "station_id" => 1
            ],
            [
                "address" => "#1 Jamiemi Close By Trinity Avenue, Off Odili Road",
                "title" => "#1 Jamiemi Close By Trinity Avenue, Off Odili Road",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08172820400/ 08037470495",
                "about" => "Mr. Victor Ekpotu ",
                "station_id" => 1
            ],
            [
                "address" => "House 5 lane 2 Multiplain Road Off Okuru link Rd",
                "title" => "House 5 lane 2 Multiplain Road Off Okuru link Rd",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "07067396861",
                "about" => "Dcns. Graham Tobins",
                "station_id" => 1
            ],
            [
                "address" => "#4 Omubo Close, Off Hon. Gideon Ekuwei Street,",
                "title" => "#4 Omubo Close, Off Hon. Gideon Ekuwei Street,",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08035635896",
                "about" => "Mr. Omatsoke Oyegbonren",
                "station_id" => 1
            ],
            [
                "address" => "Block 26 floor 3, flat 2 golf estate Okuru road",
                "title" => "Block 26 floor 3, flat 2 golf estate Okuru road",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08035496469/08038568351",
                "about" => "Mr. Lekwa Onu",
                "station_id" => 1
            ],
            [
                "address" => "#5/7 Mini Ewa Street, Oginigba",
                "title" => "#5/7 Mini Ewa Street, Oginigba",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033947716",
                "about" => "Mr/Mrs. Frank Ekedon",
                "station_id" => 1
            ],
            [
                "address" => "#6 Greg Close, Off Peter Odili Road",
                "title" => "#6 Greg Close, Off Peter Odili Road",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08036439362",
                "about" => "Mr. Seun Babasola",
                "station_id" => 1
            ],
            [
                "address" => "#16 Unity Street, Off peter Odili Road",
                "title" => "#16 Unity Street, Off peter Odili Road",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08166209875",
                "about" => "Mr. & Mrs. Jolye Ogbonyomi",
                "station_id" => 1
            ],
            [
                "address" => "#2A Iwowari Avenue By Sasun Roundabout",
                "title" => "#2A Iwowari Avenue By Sasun Roundabout",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08090474175/08037057188",
                "about" => "Mr. & Mrs. Ikenna Nzegwu",
                "station_id" => 1
            ],
            [
                "address" => "#10 Iwowori Ave., by Sasun Roundabout",
                "title" => "#10 Iwowori Ave., by Sasun Roundabout",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033652318",
                "about" => "Bro. Ogedegbe Harrison",
                "station_id" => 1
            ],
            [
                "address" => "#2 Chief Ofiafate Str. Off Higi Haga , off Odili Road",
                "title" => "#2 Chief Ofiafate Str. Off Higi Haga , off Odili Road",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08053199991",
                "about" => "Engr/Mrs. Rotimi Ajileye",
                "station_id" => 1
            ],
            [
                "address" => "#7 Onome Street, Off Iwowari Avenue",
                "title" => "#7 Onome Street, Off Iwowari Avenue",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08036716318",
                "about" => "Mr./Mrs. Chukwuka Ngwu",
                "station_id" => 1
            ],
            [
                "address" => "#25 Chief Azubuike Wosu, Off Alcon Road, Woji",
                "title" => "#25 Chief Azubuike Wosu, Off Alcon Road, Woji",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08033099225",
                "about" => "Dcns. Roli Maduka",
                "station_id" => 1
            ],
            [
                "address" => "#30 King Slope Street- 1",
                "title" => "#30 King Slope Street- 1",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08037127724",
                "about" => "Dcns. Atemea Briggs",
                "station_id" => 1
            ],
            [
                "address" => "#30 King Slope Street- 2",
                "title" => "#30 King Slope Street- 2",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08037127724",
                "about" => "Dcns. Asiki Briggs",
                "station_id" => 1
            ],
            [
                "address" => "Flat 1, #50 Rev. Samsom Chukwu Street, ALCON, Woji",
                "title" => "Flat 1, #50 Rev. Samsom Chukwu Street, ALCON, Woji",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08037052801",
                "about" => "Pst David Durotinwon",
                "station_id" => 1
            ],
            [
                "address" => "Flat 11, #50 Rev. Samsom Chukwu Street, ALCON, Woji",
                "title" => "Flat 11, #50 Rev. Samsom Chukwu Street, ALCON, Woji",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08039303097",
                "about" => "Pst Bethel Ordu",
                "station_id" => 1
            ],
            [
                "address" => "#4 Bachum Street",
                "title" => "#4 Bachum Street",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08034076472",
                "about" => "Dcns. Blessing Akanbi",
                "station_id" => 1
            ],
            [
                "address" => "#29 Circular Road",
                "title" => "#29 Circular Road",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08060478628",
                "about" => "Sister. Ezinne Abiodun",
                "station_id" => 1
            ],
            [
                "address" => "#24 Royal Avenue",
                "title" => "#24 Royal Avenue",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08037834478",
                "about" => "Dcn. Letham Nzidee",
                "station_id" => 1
            ],
            [
                "address" => "#6 Revd. Samson Chukwu Street ",
                "title" => "#6 Revd. Samson Chukwu Street ",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08037112720",
                "about" => "Dcns Sophia Afolayan",
                "station_id" => 1
            ],
            [
                "address" => "#5 Ndidi Str., Ogbatai, Woji",
                "title" => "#5 Ndidi Str., Ogbatai, Woji",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "07039079033",
                "about" => "Bro Famous Elebe",
                "station_id" => 1
            ],
            [
                "address" => "#7 Irabor Street, Off Ilom Street, Woji",
                "title" => "#7 Irabor Street, Off Ilom Street, Woji",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08035473115",
                "about" => "DCN. Segun Akingbosote",
                "station_id" => 1
            ],
            [
                "address" => "Dontimi Estate, School Rd. Flat 4, Elelenwon",
                "title" => "Dontimi Estate, School Rd. Flat 4, Elelenwon",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08154419346",
                "about" => "Sis. Margret I. Hart",
                "station_id" => 1
            ],
            [
                "address" => "#7 Wadikom street Woji",
                "title" => "#7 Wadikom street Woji",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08159049776",
                "about" => "Bro. Enamino Sonie",
                "station_id" => 1
            ],
            [
                "address" => "#5A Chijioke Street, Ogbatai, Woji",
                "title" => "#5A Chijioke Street, Ogbatai, Woji",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08055366121",
                "about" => "DCN. Ezekiel Tuaridei",
                "station_id" => 1
            ],
            [
                "address" => "#1 Emmanuel Jonah Behind Abec., Woji",
                "title" => "#1 Emmanuel Jonah Behind Abec., Woji",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08032519953",
                "about" => "Bro. Tony Iroka",
                "station_id" => 1
            ],
            [
                "address" => "#3 Redemption Close",
                "title" => "#3 Redemption Close",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08032413664",
                "about" => "DCN. Tunde Ajala",
                "station_id" => 1
            ],
            [
                "address" => "Plot 11, Road 1, Victory Estate, Elelenwo",
                "title" => "Plot 11, Road 1, Victory Estate, Elelenwo",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "07068718952",
                "about" => "Dcn. Christian Bello",
                "station_id" => 1
            ],
            [
                "address" => "#3 Grace Close, Nvigwe, Woji",
                "title" => "#3 Grace Close, Nvigwe, Woji",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "08035224282",
                "about" => "Bro. Harley Udede",
                "station_id" => 1
            ],
            [
                "address" => "Plot 5, Road 25, Federal Housing Estate, Woji",
                "title" => "Plot 5, Road 25, Federal Housing Estate, Woji",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "07033242867",
                "about" => "Bro. Isaiah Ayeni",
                "station_id" => 1
            ],
            [
                "address" => "#13 Close F, off Peace Valley, Woji",
                "title" => "#13 Close F, off Peace Valley, Woji",
                "district_id" => 1,
                "province_id" => 8,
                "phone" => "07039727357",
                "about" => "Mr & Mrs Ikoku",
                "station_id" => 1
            ],
            [
                "address" => "#22 Royal Villa Estate",
                "title" => "#22 Royal Villa Estate",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08036666640",
                "about" => "John Madubuike",
                "station_id" => 1
            ],
            [
                "address" => "#8 Elem Close, Rumuibekwe",
                "title" => "#8 Elem Close, Rumuibekwe",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08030585389",
                "about" => "DCN. Ejejigbe",
                "station_id" => 1
            ],
            [
                "address" => "#19 Pipeline road Mgbuesilaru",
                "title" => "#19 Pipeline road Mgbuesilaru",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "07038380996",
                "about" => "Stephen Ukpong",
                "station_id" => 1
            ],
            [
                "address" => "#8 Las Vegas Off Rumuibekwe Road",
                "title" => "#8 Las Vegas Off Rumuibekwe Road",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08067506486",
                "about" => "Unyime Ntaji",
                "station_id" => 1
            ],
            [
                "address" => "#6 O. J. Okpo Street, Hillview Estate, Cocaine Village",
                "title" => "#6 O. J. Okpo Street, Hillview Estate, Cocaine Village",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08033090279",
                "about" => "DCN. Emeka Igwe",
                "station_id" => 1
            ],
            [
                "address" => "#33 Old Aba Road, Rumukwrushi",
                "title" => "#33 Old Aba Road, Rumukwrushi",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08037736981",
                "about" => "Emmanuel Worgu",
                "station_id" => 1
            ],
            [
                "address" => "#14 Igwuruta road, Rumuokwurusi",
                "title" => "#14 Igwuruta road, Rumuokwurusi",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "07067436826",
                "about" => "Patience Peipeiyaye",
                "station_id" => 1
            ],
            [
                "address" => "18a Webilor Nworgu Street, Rumukwrusi",
                "title" => "18a Webilor Nworgu Street, Rumukwrusi",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08184255081",
                "about" => "Nwachukwu",
                "station_id" => 1
            ],
            [
                "address" => "#4 Ihuru Avenue, Pipeline Rumuokwurusi",
                "title" => "#4 Ihuru Avenue, Pipeline Rumuokwurusi",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "07062187200",
                "about" => "Roland Okwu Onu",
                "station_id" => 1
            ],
            [
                "address" => "#1 Pst. Raphael Antai St. off Robost Palm view rd. Timber bus stop Igbo-Etche",
                "title" => "#1 Pst. Raphael Antai St. off Robost Palm view rd. Timber bus stop Igbo-Etche",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08037419259",
                "about" => "Pst. Raphel Antai",
                "station_id" => 1
            ],
            [
                "address" => "#14 Church Road, Court Esate, Elimgbu",
                "title" => "#14 Church Road, Court Esate, Elimgbu",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08037065467",
                "about" => "Daniel Ezenduka",
                "station_id" => 1
            ],
            [
                "address" => "#2 Faith Str. Off faith Ave. Eneka",
                "title" => "#2 Faith Str. Off faith Ave. Eneka",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08035022063",
                "about" => "Bro. Samuel Ugbaja",
                "station_id" => 1
            ],
            [
                "address" => "Road 5b flat 8, Unity Estate Eneka",
                "title" => "Road 5b flat 8, Unity Estate Eneka",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08037603886",
                "about" => "Pst. Kingsley Anyaibe",
                "station_id" => 1
            ],
            [
                "address" => "Close 8,  Church Road , Court Estate , Elimgbu",
                "title" => "Close 8,  Church Road , Court Estate , Elimgbu",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08037736981",
                "about" => "Bro. Emmanuel Worgu",
                "station_id" => 1
            ],
            [
                "address" => "#4 Road 5, Farm Road, Rumuodara, Rumuodara",
                "title" => "#4 Road 5, Farm Road, Rumuodara, Rumuodara",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08037637273",
                "about" => "Dcn. A. Chidi. Nwabisi",
                "station_id" => 1
            ],
            [
                "address" => "GBA estate, Opp. Breakforth Academy, Power encounter, Rumuodara",
                "title" => "GBA estate, Opp. Breakforth Academy, Power encounter, Rumuodara",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08034809682",
                "about" => "Uwadiale",
                "station_id" => 1
            ],
            [
                "address" => "#4 Baba avenue, Egba estate Rumuodara",
                "title" => "#4 Baba avenue, Egba estate Rumuodara",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08037042304",
                "about" => "Dcn Aluko Sunday",
                "station_id" => 1
            ],
            [
                "address" => "Eli Welibo road opposite De Akoms School Off NYesom Wike Link road Rumuagholu",
                "title" => "Eli Welibo road opposite De Akoms School Off NYesom Wike Link road Rumuagholu",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08030836623",
                "about" => "Ogeh Akoma",
                "station_id" => 1
            ],
            [
                "address" => "#7 Nnanta Avenue, Eliowhani Rumuodara ",
                "title" => "#7 Nnanta Avenue, Eliowhani Rumuodara ",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "07035327379",
                "about" => "Okay Agedo",
                "station_id" => 1
            ],
            [
                "address" => "#2 Rofnel Close, off Last Bus Stop, Elikpokwu-Odu/Aluu Rd., Rukpokwu",
                "title" => "#2 Rofnel Close, off Last Bus Stop, Elikpokwu-Odu/Aluu Rd., Rukpokwu",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08036762514",
                "about" => "Mr. Greg Odele",
                "station_id" => 1
            ],
            [
                "address" => "#6 Webilor Street by Transformer Junc Off Air Port Rd Rumuodumaya",
                "title" => "#6 Webilor Street by Transformer Junc Off Air Port Rd Rumuodumaya",
                "district_id" => 1,
                "province_id" => 9,
                "phone" => "08032923694",
                "about" => "Mrs. Ajoku",
                "station_id" => 1
            ],
            [
                "address" => "# 2 dawa street eliozu ",
                "title" => "# 2 dawa street eliozu ",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08060122843",
                "about" => "Mrs. Divine Echichioya ",
                "station_id" => 1
            ],
            [
                "address" => "Farm road 3 by deeper life",
                "title" => "Farm road 3 by deeper life",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08064044656",
                "about" => "ThankGod nwachukwu ",
                "station_id" => 1
            ],
            [
                "address" => "6 Okocha close, Eliozu new layout",
                "title" => "6 Okocha close, Eliozu new layout",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08162119870",
                "about" => "Sis. Rosey Alex",
                "station_id" => 1
            ],
            [
                "address" => "#8 mercy Avenue eliozu ",
                "title" => "#8 mercy Avenue eliozu ",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "09027579207",
                "about" => "Bro Isaac Ngbede",
                "station_id" => 1
            ],
            [
                "address" => "#20 Pipeline Str, Rukpakwulusi New Exteriors, Rukpakwulosi ",
                "title" => "#20 Pipeline Str, Rukpakwulusi New Exteriors, Rukpakwulosi ",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08033035309",
                "about" => "DCN. & DCNS. Ezeocha",
                "station_id" => 1
            ],
            [
                "address" => "27 Emery Street Opp Matoris, Eliozu",
                "title" => "27 Emery Street Opp Matoris, Eliozu",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "07036925931",
                "about" => "Mrs. Esther ",
                "station_id" => 1
            ],
            [
                "address" => "KingView Guest House Street, Eliozu",
                "title" => "KingView Guest House Street, Eliozu",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08038893607",
                "about" => "Mrs. Esther George",
                "station_id" => 1
            ],
            [
                "address" => "#5 Nyama Close, Paradise Estate Eneka",
                "title" => "#5 Nyama Close, Paradise Estate Eneka",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08034649614",
                "about" => "Pst. & DCNS. Steve Ewansiha",
                "station_id" => 1
            ],
            [
                "address" => "Pst. Okobi House Rukpokwu",
                "title" => "Pst. Okobis House Rukpokwu",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08036000320",
                "about" => "Pst. & DCNS. Okobi C.",
                "station_id" => 1
            ],
            [
                "address" => "#16 peace driver farm road 2 eliozu ",
                "title" => "#16 peace driver farm road 2 eliozu ",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08063698036",
                "about" => "DR MIKE",
                "station_id" => 1
            ],
            [
                "address" => "Road 20 sars road PH",
                "title" => "Road 20 sars road PH",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08036934551",
                "about" => "BRO sam",
                "station_id" => 1
            ],
            [
                "address" => "# 7 Divine close off farm Rd 2, Eliozu",
                "title" => "# 7 Divine close off farm Rd 2, Eliozu",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "09079935953",
                "about" => "Dcns. B. Mukoro",
                "station_id" => 1
            ],
            [
                "address" => "5 Lotus lane, pearl Garden Estate, Eneka",
                "title" => "5 Lotus lane, pearl Garden Estate, Eneka",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08063596677",
                "about" => "Bro. Nonso Omoko",
                "station_id" => 1
            ],
            [
                "address" => "#10 Centenary Avenue, Castles & Green Estate Eneka",
                "title" => "#10 Centenary Avenue, Castles & Green Estate Eneka",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08038831501",
                "about" => "Mrs. Sonia Tobechukwu",
                "station_id" => 1
            ],
            [
                "address" => "#17 Annex OffRoad 20, Rumuaghoeu",
                "title" => "#17 Annex OffRoad 20, Rumuaghoeu",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "07035470856",
                "about" => "Mrs. Datonye Ogaji",
                "station_id" => 1
            ],
            [
                "address" => "Okemini Market Rd off SARS RD R/agholu",
                "title" => "Okemini Market Rd off SARS RD R/agholu",
                "district_id" => 1,
                "province_id" => 10,
                "phone" => "08091050261",
                "about" => "Elder Dr. G Owhonda",
                "station_id" => 1
            ],
            [
                "address" => "#18 Peace Avenue,Off NTA/Apara Link Road,Rumuigbo, New Layout",
                "title" => "#18 Peace Avenue,Off NTA/Apara Link Road,Rumuigbo, New Layout",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08033208620",
                "about" => "DCN. & DCNS. Adelodun",
                "station_id" => 1
            ],
            [
                "address" => "#1 Peace Avenue, Off Obiwali Road, Rumuigbo",
                "title" => "#1 Peace Avenue, Off Obiwali Road, Rumuigbo",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08181324938",
                "about" => "Venessa Ebakwo",
                "station_id" => 1
            ],
            [
                "address" => "#Umesi Estate, House 3, Close C,   Rumuigbo New Layout",
                "title" => "#Umesi Estate, House 3, Close C,   Rumuigbo New Layout",
                "district_id" => 1,
                "province_id" => 11,
                "station_id" => 1
            ],
            [
                "address" => "#8 Revival Close, Off Salvation Ave., Obi Wali, Rumuigbo",
                "title" => "#8 Revival Close, Off Salvation Ave., Obi Wali, Rumuigbo",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "07030631898",
                "about" => "Sis. Eucharia Akinola",
                "station_id" => 1
            ],
            [
                "address" => "#4 Salvation Close, off Salvation Ave. NTA Rd. by oil zone one",
                "title" => "#4 Salvation Close, off Salvation Ave. NTA Rd. by oil zone one",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08037025727",
                "about" => "Dcn Darby Ikem",
                "station_id" => 1
            ],
            [
                "address" => "#2b Zims Estate , Off Eke Street NTA Rd Rumuokwuta",
                "title" => "#2b Zims Estate , Off Eke Street NTA Rd Rumuokwuta",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08036773008",
                "about" => "Dcns Amara Adejugbe",
                "station_id" => 1
            ],
            [
                "address" => "#8 Ezebunwo Street, Apara Link Road, Rumuigbo",
                "title" => "#8 Ezebunwo Street, Apara Link Road, Rumuigbo",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "09038414544",
                "about" => "Mrs Ruth John",
                "station_id" => 1
            ],
            [
                "address" => "#8 Peace Close, New Rumuigbo Layout",
                "title" => "#8 Peace Close, New Rumuigbo Layout",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08033103626",
                "about" => "Pst and Dcns. Allagoa",
                "station_id" => 1
            ],
            [
                "address" => "#12 Tasie Close, Mini Ave, off NTA Rd. Mgbuoba",
                "title" => "#12 Tasie Close, Mini Ave, off NTA Rd. Mgbuoba",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08143714552",
                "about" => "Gift Jeremiah Offor",
                "station_id" => 1
            ],
            [
                "address" => "Eriolu Street, Behind Cherubim Church, Rumuomoi",
                "title" => "Eriolu Street, Behind Cherubim Church, Rumuomoi",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08108909404",
                "about" => "Sis Chinyere Tee-Stowe",
                "station_id" => 1
            ],
            [
                "address" => "#23, Rumuobasiolu Street, Rumuigbo",
                "title" => "#23, Rumuobasiolu Street, Rumuigbo",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "07060531278",
                "about" => "Mrs. Gladys K. Tebeda",
                "station_id" => 1
            ],
            [
                "address" => "#1 William Crescent, New Layout, Rukpakulusi.",
                "title" => "#1 William Crescent, New Layout, Rukpakulusi.",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08184638280",
                "about" => "Dcn and Mrs Okunola.",
                "station_id" => 1
            ],
            [
                "address" => "#4 Eze Udo Close. Wokeota Avenue, Rumuagholu",
                "title" => "#4 Eze Udo Close. Wokeota Avenue, Rumuagholu",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08033427575",
                "about" => "Dcns. Olakunle Akinboboye",
                "station_id" => 1
            ],
            [
                "address" => "#1 Clem Udoh Lane, by wogu street, Off Kasiorlu Rd. Rumuigbo ",
                "title" => "#1 Clem Udoh Lane, by wogu street, Off Kasiorlu Rd. Rumuigbo ",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08136551072",
                "about" => "Pst. & Dcns. Clement Udoh",
                "station_id" => 1
            ],
            [
                "address" => "#15 Rumuorosi Avenue, Off Psychiatric Rd.",
                "title" => "#15 Rumuorosi Avenue, Off Psychiatric Rd.",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "0805 603 6513",
                "about" => "MR & MRS VICTOR O LARAIYETAN",
                "station_id" => 1
            ],
            [
                "address" => "#15b  Amadi Street, Off Pychiatric Road, Rumu-Omoi",
                "title" => "#15b  Amadi Street, Off Pychiatric Road, Rumu-Omoi",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08035512232",
                "about" => "Dcns. Chioma  Nwanchukwu",
                "station_id" => 1
            ],
            [
                "address" => "#4 Ngara-Igo Street, Mugbuoba",
                "title" => "#4 Ngara-Igo Street, Mugbuoba",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08053391139",
                "about" => "Dcn. Ikpeh",
                "station_id" => 1
            ],
            [
                "address" => "Plot 1, Street 7, Radio Estate Ozuoba, PHC",
                "title" => "Plot 1, Street 7, Radio Estate Ozuoba, PHC",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08055264759",
                "about" => "Dr. Theophilus Odagme",
                "station_id" => 1
            ],
            [
                "address" => "#5 3rd Avenue God City Estate Ozuoba ",
                "title" => "#5 3rd Avenue God City Estate Ozuoba ",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08035416023",
                "about" => "Dcn. David Asabaa",
                "station_id" => 1
            ],
            [
                "address" => "#12 Osobinawu Street, Ozuoba Off Pipeline Rd",
                "title" => "#12 Osobinawu Street, Ozuoba Off Pipeline Rd",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08037971427",
                "about" => "Pst. Clelestine",
                "station_id" => 1
            ],
            [
                "address" => "Malaysia Estate, Blk 6, cornerstone road, egbelu",
                "title" => "Malaysia Estate, Blk 6, cornerstone road, egbelu",
                "district_id" => 1,
                "province_id" => 11,
                "station_id" => 1
            ],
            [
                "address" => "4 Wisdom Close (First Avenue) Egbelu",
                "title" => "4 Wisdom Close (First Avenue) Egbelu",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "07067309428",
                "about" => "Bro. Johnson",
                "station_id" => 1
            ],
            [
                "address" => "43 Peace Avenue Egbelu",
                "title" => "43 Peace Avenue Egbelu",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08037113068",
                "about" => "Pst. Muyiwa",
                "station_id" => 1
            ],
            [
                "address" => "#4 Pipeline Rd. Egbelu",
                "title" => "#4 Pipeline Rd. Egbelu",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08037436959",
                "about" => "Bro Wisdom",
                "station_id" => 1
            ],
            [
                "address" => "Rd 1 Close Elioparanwo New Layout",
                "title" => "Rd 1 Close Elioparanwo New Layout",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08032007467",
                "about" => "Bro Samson Taiwo",
                "station_id" => 1
            ],
            [
                "address" => "# 1 Habemem Close Rumuewhorlu, off miniorlu by Ada George",
                "title" => "# 1 Habemem Close Rumuewhorlu, off miniorlu by Ada George",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "07035190394",
                "about" => "Dcn Chima Uzoma",
                "station_id" => 1
            ],
            [
                "address" => "# 10 Iyiaka Street Elioparawon",
                "title" => "# 10 Iyiaka Street Elioparawon",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08036198177",
                "about" => "DCN. Omotosho ",
                "station_id" => 1
            ],
            [
                "address" => "Rd 1 Extn. Southern Avenue Ajip by Ada-George",
                "title" => "Rd 1 Extn. Southern Avenue Ajip by Ada-George",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08063297925",
                "about" => "Eferebo Omiete",
                "station_id" => 1
            ],
            [
                "address" => "#4 Milles Close, off Cecilia , Iwofe ",
                "title" => "#4 Milles Close, off Cecilia , Iwofe ",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08037517483",
                "about" => "Dcn Calis Nwankwo",
                "station_id" => 1
            ],
            [
                "address" => "#17B Ada George Road by Okilton Junction",
                "title" => "#17B Ada George Road by Okilton Junction",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08034741000",
                "about" => "Azo Lovelyn",
                "station_id" => 1
            ],
            [
                "address" => "True Vine Avenue Iwofe",
                "title" => "True Vine Avenue Iwofe",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "08037704230",
                "about" => "Dcn Greg",
                "station_id" => 1
            ],
            [
                "address" => "Plot 1 Covenant Close, City Avenue, off Aker Road ",
                "title" => "Plot 1 Covenant Close, City Avenue, off Aker Road ",
                "district_id" => 1,
                "province_id" => 11,
                "phone" => "07063108822",
                "about" => "Bro Idy Isaac",
                "station_id" => 1
            ],
            [
                "address" => "16 Harstrup street link road",
                "title" => "16 Harstrup street link road",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08033416485",
                "about" => "Deacon Dambo",
                "station_id" => 1
            ],
            [
                "address" => "56 Azungugu oasis",
                "title" => "56 Azungugu oasis",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "09030987262",
                "about" => "Mrs Maru",
                "station_id" => 1
            ],
            [
                "address" => "Behind mountain of fire ministry Rumuola",
                "title" => "Behind mountain of fire ministry Rumuola",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08084197278",
                "about" => "Brother Michael Esseney",
                "station_id" => 1
            ],
            [
                "address" => "2 Chief Samson Chinwo street",
                "title" => "2 Chief Samson Chinwo street",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08035096126",
                "about" => "Bridget Ndamati",
                "station_id" => 1
            ],
            [
                "address" => "14 Kings Close",
                "title" => "14 Kings Close",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08032765262",
                "about" => "Esther Aiyerobe",
                "station_id" => 1
            ],
            [
                "address" => "37 Timothy lane",
                "title" => "37 Timothy lane",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08030911688",
                "about" => "Enoobong Iwo",
                "station_id" => 1
            ],
            [
                "address" => "27 Timothy lane Rumuola",
                "title" => "27 Timothy lane Rumuola",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08034010905",
                "about" => "Kelvin Okeke",
                "station_id" => 1
            ],
            [
                "address" => "113 Rumuola road",
                "title" => "113 Rumuola road",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08093044698",
                "about" => "Sis Awosiji Catherine",
                "station_id" => 1
            ],
            [
                "address" => "9 Chief benson close",
                "title" => "9 Chief benson close",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08060384718",
                "about" => "Mrs Favour Uzoma",
                "station_id" => 1
            ],
            [
                "address" => "Chief Good luck close",
                "title" => "Chief Good luck close",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08033418488",
                "about" => "Solomon Opara",
                "station_id" => 1
            ],
            [
                "address" => "#12 Okana New layout Rumuokwuta",
                "title" => "#12 Okana New layout Rumuokwuta",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08069366778",
                "about" => "Sis Paula",
                "station_id" => 1
            ],
            [
                "address" => "#3, Owhor Close, Oroazi",
                "title" => "#3, Owhor Close, Oroazi",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08064377159",
                "about" => "Mr. & Mrs. Uche",
                "station_id" => 1
            ],
            [
                "address" => "#2 Anele close Rumuokwuta",
                "title" => "#2 Anele close Rumuokwuta",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08032555565",
                "about" => "Mr. & Mrs. Ejike. Donald",
                "station_id" => 1
            ],
            [
                "address" => "#11 Chief Okoli close, Orosi",
                "title" => "#11 Chief Okoli close, Orosi",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08066534845",
                "about" => "Mr Kelsy Braide",
                "station_id" => 1
            ],
            [
                "address" => "#25 Iwofe Road PHC",
                "title" => "#25 Iwofe Road PHC",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "07035541041",
                "about" => "Elder",
                "station_id" => 1
            ],
            [
                "address" => "#18 Chinda Eligbam Rd",
                "title" => "#18 Chinda Eligbam Rd",
                "district_id" => 1,
                "province_id" => 12,
                "phone" => "08037085494",
                "about" => "Pst. Tom Agara",
                "station_id" => 1
            ]
        ];

        foreach ($data as $item) {
            Homecell::create($item);
        }
    }

    public function render()
    {

        return view('livewire.debug.wsf');
    }
}
