<?php

namespace App\Http\Controllers;
use App\Helpers\ProcedimientoHelper;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class V2Controller extends Controller
{

    public static function nch43($lote, $samples, $row, $col)
    {
        $row1	=	"6347437386369647366146986371623326168045";
        $row2	=	"9774246762428114572042533237322707360751";
        $row3	=	"1676622766565026710732907978531355385859";
        $row4	=	"1256859926969668273105037293155712101421";
        $row5	=	"5559563564383882462231624309900618443253";
        $row6	=	"1622779439495443548217379323788735209643";
        $row7	=	"8442175331572457068876047447672176335027";
        $row8	=	"6301637859169555671998105071751286735807";
        $row9	=	"3321123429786456078252420744381551001342";
        $row10	=	"5760863244094727965449174609629052847727";
        $row11	=	"1818079246441716580979838619620676500310";
        $row12	=	"2662389775841607749983114632242014858845";
        $row13	=	"2342406474829777777107453214083298940772";
        $row14	=	"5236281995509226119700567431388022025353";
        $row15	=	"3785943512833950083042340796885442068798";
        $row16	=	"7029171213403320382613895103741776371304";
        $row17	=	"5662183735968350877597122593477033240354";
        $row18	=	"9949772257884295457216643616000443186679";
        $row19	=	"1608150472332714340945593468491272073445";
        $row20	=	"3116933243502789871920153700495285666044";
        $row21	=	"6834301370557430774044227884260433460952";
        $row22	=	"7457256576592997686071913867541358182476";
        $row23	=	"2742378653485590657296576936109646924245";
        $row24	=	"0039682961663732203077845703291045650426";
        $row25	=	"2994989424684969108253759193303425205727";
        $row26	=	"1690826659836264111267190071746047212968";
        $row27	=	"1127947506060919746602943734027670903086";
        $row28	=	"3524101620333251263879784504911692535616";
        $row29	=	"3823168638423897015087756681414001749162";
        $row30	=	"3196259147964433491334868253910052434885";
        $row31	=	"6667406714640571958611056509687683203790";
        $row32	=	"1490844511756388059052274114862298122208";
        $row33	=	"6805511800339602751907606293555933824390";
        $row34	=	"2046787390975140140204023331083954164936";
        $row35	=	"6419589779150615932001901075064078788962";
        $row36	=	"0526937060223585151392035159675956780683";
        $row37	=	"0797108823099842996461716299160651291693";
        $row38	=	"6871868585548766475473320811124495926316";
        $row39	=	"2699616553583778807042105067423217558574";
        $row40	=	"1465526875875936224126786306551308270150";
        $row41	=	"1753775871714161507212419496264495273699";
        $row42	=	"9026592119235223331296930218390702183607";
        $row43	=	"4123525599310449699610474855881341438920";
        $row44	=	"6020508169319973686835813303762430124860";
        $row45	=	"9125380590945828413645375903099035572912";
        $row46	=	"3450577437988033009109779319827494800404";
        $row47	=	"8522043943738153947933624686280831544631";
        $row48	=	"0979137748738297222105032724837289440560";
        $row49	=	"8875801814229575424939328222490248077037";
        $row50	=	"9096237000390003069055857838369437306932";
        $row51	=	"5374239967613228698494626786249833411995";
        $row52	=	"6338068654990065269402829023077962678060";
        $row53	=	"3530582146067217109425213175964928240049";
        $row54	=	"6343368369655118378861384412453292858865";
        $row55	=	"9825375526019182814674711294972402713707";
        $row56	=	"0263211769715080895638157011484340458698";
        $row57	=	"6455222182482228060061541343918278122329";
        $row58	=	"8507261389011007820459636936036911158380";
        $row59	=	"5854162415515444820062616504693818651897";
        $row60	=	"3485278487614864562690184813263770154257";
        $row61	=	"0392182746579916965630337285228464385698";
        $row62	=	"6295302759377541664886978061452353040163";
        $row63	=	"0845931522602175469198772785422888610884";
        $row64	=	"0708551840454475139024949661025755668315";
        $row65	=	"0185899566511019348815849719751276394378";
        $row66	=	"7284711435191158492650111717768631572018";
        $row67	=	"8878281684135253945375456930967389657031";
        $row68	=	"4517756557284019721225127475676040608119";
        $row69	=	"9676281254220111942571961616886864367445";
        $row70	=	"4331677230240294086338323666026936382539";
        $row71	=	"5044664421660658056268155435024235489632";
        $row72	=	"2266221586266375419958423672245837521851";
        $row73	=	"9624401451232230885795674729839469400607";
        $row74	=	"3173916119602072934898570723696595396958";
        $row75	=	"7860739984438994364556694407419022910712";
        $row76	=	"8437906156701023980585113476607648453460";
        $row77	=	"3667100823989335088699297629813334915893";
        $row78	=	"0728590748896458897583856227893014785627";
        $row79	=	"1015838760792431665621482406939198940549";
        $row80	=	"5519689765037352165600535590273342293887";
        $row81	=	"5381291339350120713462337482145373190903";
        $row82	=	"5186326892339874669940147194584594193881";
        $row83	=	"3591702913800354072796947832665095527433";
        $row84	=	"3771679513200244959464850405720132907614";
        $row85	=	"9366138327927964647228549653844814529894";
        $row86	=	"0296084565130500418493075472592145570977";
        $row87	=	"4983434835828833699672360419764745151860";
        $row88	=	"8460716246408081303734392305382515357130";
        $row89	=	"1817308871449114884789233063155634204789";
        $row90	=	"7969106178713276956287002258409254017525";
        $row91	=	"7593365783562014821174219790659642686386";
        $row92	=	"3830922903062881393862250684636129089367";
        $row93	=	"5129501034315775958051970274777615484944";
        $row94	=	"2131388624377981537473241610335283909476";
        $row95	=	"2901238788580239376742101420921655234245";
        $row96	=	"9533952200187472001838795869328176802692";
        $row97	=	"9084607980243659873882075389359635237918";
        $row98	=	"4640629882549720569515748008321646705080";
        $row99	=	"2031890343384682687232148299708060471897";
        $row100	=	"7159730550082223717791019320498296592694";
        $row101	=	"2217686584689523923587022257516109439506";
        $row102	=	"1936275946137993375539773277098552053062";
        $row103	=	"1677230277096187252128062425931671135978";
        $row104	=	"7843767161204490326497676399614638039322";
        $row105	=	"0328282608733732040569301609058869582899";
        $row106	=	"9322536439071063763587030479880813138551";
        $row107	=	"7876585474923870969252067979458263182744";
        $row108	=	"2368352600995393612852700548345665056186";
        $row109	=	"1539257099938652776515335905282287260747";
        $row110	=	"5871963024184623342785139924444918097949";
        $row111	=	"5735273372245363940941107647914404954966";
        $row112	=	"4850865448220634725282211565203329947111";
        $row113	=	"6196489503071639336698561056797721302712";
        $row114	=	"3693894126297083635199742052368709411509";
        $row115	=	"1887004231579012020723473717315408018863";
        $row116	=	"8856532759333572674777345545700818273890";
        $row117	=	"0972958429494131067042380645186484733165";
        $row118	=	"1296881731651969028360758690682464193551";
        $row119	=	"8594572416920984387622002769852981947870";
        $row120	=	"3864435998987787680791516762444098059378";
        $row121	=	"5344094272004168797968472200203555315151";
        $row122	=	"4076662684579999903736633208583740136897";
        $row123	=	"0217791805125952570222079047032814113079";
        $row124	=	"9517820653315110964692068807775611508169";
        $row125	=	"3576224292961183448034683548773342409060";
        $row126	=	"2629135641854704660834727569138243804615";
        $row127	=	"7780207582728232999063957376638973449905";
        $row128	=	"4640664452913674435330821354007845639835";
        $row129	=	"3756081809775384464731911895582416741153";
        $row130	=	"6165616866372747391984837007485321400671";
        $row131	=	"9343696407341804523556270924866185538345";
        $row132	=	"2196601299112099451848139355341837794990";
        $row133	=	"9520479797273783287100064141744589093984";
        $row134	=	"9786217873106581925958761714970476621617";
        $row135	=	"6992063413597174173227551024192371821374";
        $row136	=	"0431172156337399198726723927675377576893";
        $row137	=	"6106980391871477439643006598504560330107";
        $row138	=	"8593858688728708624016061089202321347497";
        $row139	=	"2174324745739607945209659077472576161933";
        $row140	=	"1569538280799623531065390716294533024370";
        $row141	=	"0289080449202114688687639395171129019580";
        $row142	=	"8718158979854301727308617451698974398215";
        $row143	=	"8983719422599750995208528508408780616531";
        $row144	=	"1008582166726849293189858446065973178523";
        $row145	=	"4790561008880284278342297223196656456579";
        $row146	=	"2285616890496492854416404012898850148106";
        $row147	=	"6780437933128311411625581968707702540052";
        $row148	=	"2762509672794461401514534065392731585028";
        $row149	=	"3378808715383006382114474707265496875332";
        $row150	=	"1313926699472449577432254362171097116984";
        $row151	=	"1027539623715054362354310482980414121509";
        $row152	=	"2841506188648527201883363605563971650962";
        $row153	=	"3421425702591918974880300330980524677007";
        $row154	=	"6181772323828211540853287058964407395543";
        $row155	=	"6115181354168620268890748055091453905117";
        $row156	=	"9176216464449113329775316266548480327577";
        $row157	=	"0097790806373028598553566853400174395973";
        $row158	=	"3646183494752080277778916916000843187368";
        $row159	=	"8898996050659579429493624089964356477166";
        $row160	=	"0437598721050203241747278156519234860182";
        $row161	=	"6362063441942178550972763416942995818383";
        $row162	=	"7847235390344192457109237070071238927943";
        $row163	=	"8768621543531436592554473370155924484035";
        $row164	=	"4760921077885953115266256907044868647106";
        $row165	=	"5688875941652804675395798837315041069476";
        $row166	=	"0257458667734307344844268793297709616784";
        $row167	=	"3154141317486211906068129364284624791676";
        $row168	=	"2850164336289785589967225276232470365454";
        $row169	=	"6329626650026345523867634754758324784320";
        $row170	=	"4565582651769659387286574571464467761455";
        $row171	=	"3965368270774585505174133935223053360295";
        $row172	=	"7371981604291894512376519484867993963863";
        $row173	=	"7220562011726571088679579513919748726648";
        $row174	=	"7517269976893720700177316195462697057351";
        $row175	=	"3740606329813015391448387593290687377848";
        $row176	=	"6808028072837146304989179588290239560346";
        $row177	=	"1423986167705285015001840278431062981941";
        $row178	=	"4908962144252799412807410834661942743991";
        $row179	=	"7837060843636162422939689510960924230062";
        $row180	=	"3721341768689683235632846015314473673477";
        $row181	=	"1429093404878307550776583083648729255884";
        $row182	=	"5843280636495283511447569129340687310695";
        $row183	=	"1043672970806280034210802138849056350309";
        $row184	=	"4438883954869737442200950131761716295663";
        $row185	=	"9069561951873952851307283707611116362703";
        $row186	=	"4147102562970521036120263631626869869544";
        $row187	=	"9194146319758911471131563419097957923659";
        $row188	=	"8006541866091894061998400717812245448411";
        $row189	=	"6772776348840831555824334577588045679382";
        $row190	=	"5940241327792688863001316010395358477093";
        $row191	=	"0590358995016116969450781369363768533731";
        $row192	=	"4443806998466805148290785005627779135744";
        $row193	=	"6181319682005725605946726018775566126211";
        $row194	=	"4288071005249865632147216188322780302160";
        $row195	=	"7794300539281099002712737399124999579482";
        $row196	=	"7883197616941168842623542086852386669907";
        $row197	=	"8776596181436364616165763695901848274568";
        $row198	=	"9143059647557899952437558578780148411910";
        $row199	=	"8497777273096206657287124903604115207627";
        $row200	=	"8741607683448896078083058338967370668190";
        $row201	=	"2889658708135063042325475791135262241994";
        $row202	=	"3029436542786628558047464190085598781070";
        $row203	=	"9574626053515732222712727227774467322313";
        $row204	=	"0184549672668665646056597536754644436371";
        $row205	=	"1091469686198352475365005193513080051929";
        $row206	=	"0533180851517857261734879623958999933979";
        $row207	=	"0443133700796896266070398366566203558657";
        $row208	=	"0585402524735293705048214774631727275126";
        $row209	=	"8490906577639925690209040335781979950721";
        $row210	=	"2855530948862830023571303206479374218633";
        $row211	=	"8983406980979647599756332487361718169046";
        $row212	=	"7320960568934169960797508179594237138183";
        $row213	=	"1089077621402474364240330446243563023161";
        $row214	=	"9150277837060616259817788036852641776337";
        $row215	=	"0354446688978126038939466721179810393315";
        $row216	=	"8941589163659959978490147961555616888760";
        $row217	=	"1343009726169121324160226672173185336007";
        $row218	=	"7171005172620389263235279918257812030970";
        $row219	=	"1928150041422773403837110575169881993729";
        $row220	=	"5638309230455194690400841436379566390109";
        $row221	=	"3927528911008106284812080575260335630577";
        $row222	=	"7313285801050642240760602999937293780436";
        $row223	=	"8160845157126846558960097187897081109591";
        $row224	=	"0562980785077926696167957237418579764823";
        $row225	=	"6297162918521616235662958097633225340336";
        $row226	=	"3113632108160192582148797473720874809138";
        $row227	=	"9738353419898405344788093154889796860169";
        $row228	=	"3211783382519998443912751060368066399497";
        $row229	=	"8199133705081260392361638489182602043795";
        $row230	=	"4574000305699947265248063000180330285559";
        $row231	=	"1184136901889128795071421496559859960136";
        $row232	=	"1466128722594527085185642385416472085944";
        $row233	=	"4025678782842717303748694902589802505811";
        $row234	=	"4448974943654553410714834674117666636008";
        $row235	=	"4194540657482801838409112191739728447406";
        $row236	=	"0712155884931831834554526229915358546605";
        $row237	=	"6427904352182632968350584527571496396485";
        $row238	=	"8071864103456263408835693410943222520474";
        $row239	=	"2706080992262259282738582214792432123842";
        $row240	=	"5468972054332674033074221913483028019249";
        $row241	=	"0292656899055315267004692264070473257482";
        $row242	=	"8352577862986170482268506455754270320960";
        $row243	=	"8282763133851341381016476143778327197041";
        $row244	=	"3861340949044166097620507340952477957320";
        $row245	=	"0101118838031016822439582012398277021888";
        $row246	=	"2166143828540818070492176336753314111178";
        $row247	=	"3229306959685033314715648875270451416196";
        $row248	=	"0459216547399089867746868688865009132491";
        $row249	=	"3864500736565045942548284830516073730387";
        $row250	=	"4833508353597764599058926250189309458906";


        $init_row = [1, 36, 71, 106, 141, 176, 211, 246];
        $limit_row = [35, 70, 105, 140, 175, 210, 245, 250];

        $procedimiento = ProcedimientoHelper::getProcedimientoByLote($lote);

        $columnas_a_usar = round($procedimiento->digits/2);

        $valido=0;
        
        $salida = [];

        if($procedimiento->move == "utd"){
            $aux = 0;
            while($valido < $samples){
                $numero = collect();
                $fila = "row".$row;
                if($columnas_a_usar + $col > 20){

                    $number = filter_var(substr($$fila, $col*2 - 2, $procedimiento->digits), FILTER_SANITIZE_NUMBER_INT);
                    if(strlen($number) < $procedimiento->digits){
                        $col_aux = 1;
                        $row_aux = "row".$row+1;
                        if($row == 250)
                            $row_aux = "row1";
                        $number .= filter_var(substr($$row_aux, $col_aux*2 - 2, $procedimiento->digits - strlen($number)), FILTER_SANITIZE_NUMBER_INT);
                    }

                }else{
                    $number = filter_var(substr($$fila, $col*2 - 2, $procedimiento->digits), FILTER_SANITIZE_NUMBER_INT);
                }

                $row_flag = 0;
                $column_to_show = '';
                $a=0;
                $count = 1;
                while ($a < $columnas_a_usar) {

                    if($col + $a > 20){
                        $col_aux = $count ;
                        $count++;
                        $row_flag = 1;
                    }else{  
                        $col_aux = $col+$a;
                    }
                    $column_to_show .= $col_aux.' | '; 
                    $a++;
                }

                if($row_flag == 1){
                    $numero->put('fila', $row." | ".$row + 1);
                }else{
                    $numero->put('fila', $row);
                }

                $column_to_show = substr($column_to_show, 0, -2);
                $numero->put('columna', $column_to_show);

                V2Controller::operations($procedimiento, $number, $numero, $lote);

                if(V2Controller::isAlreadyTake($numero, $salida)){
                    $numero->put('valido', false);
                    $numero->put('comentario', "Número considerado previamente.");
                    }
                if($numero['valido'])
                    $valido++;
                
                if(in_array($row, $limit_row)){ //si la fila actual es la última de la pagina entro 
                    if($col+$columnas_a_usar - 1 >= 20){
                        $row++;
                        $col = $col + $columnas_a_usar - 20;
                    }else{
                        $row= $init_row[array_search($row, $limit_row)]; //seteo la fila con la inicial de su misma pagina
                        $col = $col+$columnas_a_usar;
                    }
                }else{
                    $row++;
                }
                if($row > 250)
                    $row = 1;
                $aux++;
                $salida[] = $numero;  
            }
        }else{
            if($procedimiento->digits == 1){
                $col_aux = $col*2 - 2;
                $secondary_col = 1;
                while($valido < $samples){
                    $col_2 = round(($col_aux+1)/2);
                    $numero = collect();
                    $fila = "row".$row;
                    $number = str_split($$fila, $procedimiento->digits);
                    $number = $number[$col_aux];
                    $numero->put('fila', $row);
                    $numero->put('columna', $col_2.".".$secondary_col);
    
                    V2Controller::operations($procedimiento, $number, $numero, $lote);
                    if(V2Controller::isAlreadyTake($numero, $salida)){
                        $numero->put('valido', false);
                        $numero->put('comentario', "Número considerado previamente.");
                    }
                    if($numero['valido'])
                        $valido++;
    
                    $col_aux++;
                    if($col_aux > 40 - 1){
                        $col_aux = 0;
                        $row++;
                    }
                    if($row > 250)
                        $row = 1;
                    $salida[] = $numero;
                    $secondary_col++;
                    if($secondary_col > 2)
                        $secondary_col = 1;
                }
            }else{
                $col_aux = $col - 1;
                while($valido < $samples){
                    $numero = collect();
                    $fila = "row".$row;
                    $number = str_split($$fila, $procedimiento->digits);
                    $number = $number[$col_aux];
                    $numero->put('fila', $row);
                    $numero->put('columna', $col_aux+1);
    
                    V2Controller::operations($procedimiento, $number, $numero, $lote);
                    if(V2Controller::isAlreadyTake($numero, $salida)){
                        $numero->put('valido', false);
                        $numero->put('comentario', "Número considerado previamente.");
                    }
                    if($numero['valido'])
                        $valido++;
    
                    $col_aux++;
                    if($col_aux > 20 - 1){
                        $col_aux = 0;
                        $row++;
                    }
                    if($row > 250)
                        $row = 1;
                    $salida[] = $numero;
                }

            }
        }
        return json_encode($salida);
    }

    public static function operations($procedimiento, $number, $numero, $lote){

        $numero->put('valor_original', $number);
        if($number == 0){
            $numero->put('valor_final', $procedimiento->max);
            $numero->put('valido', $procedimiento->max<=$lote);
            $numero->put('operación', "NA");
            $numero->put('comentario', "Art. 8. El ". $number ." de la tabla se leerá como ".$procedimiento->max);
        }else{
            if($procedimiento->divider <> 0){
                if($number%$procedimiento->divider == 0){
                    $numero->put('valor_final', $procedimiento->max);
                    $numero->put('valido', $procedimiento->max<=$lote);
                    $numero->put('operación', floor($number/$procedimiento->divider).' x '.$procedimiento->divider.' + '.$number%$procedimiento->divider.' = '.$number);
                    $numero->put('comentario', "Art. 8. El resto 0 de la tabla se leerá como ".$procedimiento->max);
                    if($number%$procedimiento->divider>$lote)
                        $numero->put('comentario','Valor final mayor al lote.');
                }else{
                    $numero->put('valor_final', $number%$procedimiento->divider);
                    $numero->put('valido', $number%$procedimiento->divider<=$lote);
                    $numero->put('comentario', '-');
                    if($number%$procedimiento->divider>$lote)
                        $numero->put('comentario', 'Valor final mayor al lote.');
                    $numero->put('operación', floor($number/$procedimiento->divider).' x '.$procedimiento->divider.' + '.$number%$procedimiento->divider.' = '.$number);
                }
            }else{
                $numero->put('valor_final', $number);
                $numero->put('valido', $number<=$lote);
                $numero->put('comentario', '-');
                if($number>$lote)
                    $numero->put('comentario', 'Valor final mayor al lote.');
                $numero->put('operación', 'NA');
            }
        }        
    }

    public static function isAlreadyTake($numero, $salidas)
    {
        foreach($salidas as $salida){
            if ($salida['valor_final'] == $numero['valor_final']){             
                return true;

            }
        }
            return false;
        
    }

    public static function itsZeros($numero, $reglas){
        return (str_split($numero, $reglas->digits)[0] == str_repeat("0", $reglas->digits));
    }


    public static function getView($lote, $samples, $row=null, $column=null){
        $data = V2Controller::nch43($lote, $samples, $row, $column);
        $array_data = json_decode($data);
        $last_number = $array_data[count($array_data) - 1];
        $last_row = explode(" | ", $last_number->fila);
        $last_column = explode(" | ",$last_number->columna);
        return view('welcome', [
             'data'=> $data,
            'lote' => $lote,
            'muestras' => $samples,
            'inicial' => $row.'/'.$column,
            'final' => $last_row[count($last_row) -1].'/'.$last_column[count($last_column) -1]
        ]);
    }

    
    public static function toPdf($lote, $samples, $row, $column) {
        $initial_coordinate = $row.'/'.$column;
        $data = V2Controller::nch43($lote, $samples, $row, $column);
        $array_data = json_decode($data);
        $last_number = $array_data[count($array_data) - 1];
        $last_row = explode(" | ", $last_number->fila);
        $last_column = explode(" | ",$last_number->columna);
        $pdf = Pdf::loadView('welcome2', [
            'data'=> V2Controller::nch43($lote, $samples, $row, $column),
            'lote' => $lote,
            'muestras' => $samples,
            'inicial' => $initial_coordinate,
            'final' => $last_row[count($last_row) -1].'/'.$last_column[count($last_column) -1]]);
        return $pdf->setPaper('letter', 'landscape')->download('nch43.pdf');
        
    }
}
