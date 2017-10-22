<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Title</title>

    <link
            rel="stylesheet"
            href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
            integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
            crossorigin="anonymous">
    <!--<link-->
    <!--rel="stylesheet"-->
    <!--href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <link rel="stylesheet" type="text/css" href="{{asset("v2/assets/css/styles.min.css")}}"/>

</head>
<body>


<header class="bg-w w-100 ff-SFNSD">
    <div class="container h2 p-3 text-info">Logo</div>
</header>
<div class="body container">
    <form action="{{Route('loanstore')}}" method="POST" name="loanForm" id="loanForm">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6 col-12 block_1_1">

            <div class="h3 text-info ff-SFNSD">
                LAINAA 500 – 50 000 EUROA <br>
                ILMAN VAKUUKSIA TAI TAKAAJIA
            </div>
            <div class="h5 ff-ASUF">
                <p>Arkadia Rahoituksen kautta löydät helposti ja nopeasti juuri itsellesi sopivimman
                    rahoitusratkaisun eri rahoitusyhtiöiden ja pankkien tarjonnasta. Palvelu on maksuton!</p>
                <p>Jätä hakemus nyt, saat lainatarjoukset nopeammin!</p>
            </div>
            <table class="ff-ASUF text-muted w-100">
                <tr>
                    <td width="100px">
                        <div class="circle c-active bg-active"><span class="ff-SFNSD text-white h3">1</span></div>
                        <div class="stovbnjak bg-active"></div>
                    </td>
                    <td width="*">
                        <p class="h4 text-info">MINKÄLAISEN LAINAN TARVITSET?</p>
                        <p class="h6">
                            Aloita valitsemalla lainasumma, laina-aika sekä anna sähköpostiosoitteesi ja
                            matkapuhelinnumerosi.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="stovbnjak bg-active"></div>
                        <div class="circle c-active bg-active"><span class="ff-SFNSD text-white h3">2</span></div>
                        <div class="stovbnjak bg-active"></div>
                    </td>
                    <td><p class="h4 text-info">TÄYTÄ LAINAHAKEMUS</p>
                        <p class="h6">
                            Anna perustiedot itsestäsi sekä mahdollisesta yhteishakijasta ja lähetä hakemuksesi,
                            jotta voimme etsiä juuri sinulle sopivimman rahoituksen.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="stovbnjak bg-muted"></div>
                        <div class="circle bg-muted"><span class="ff-SFNSD text-white h3">3</span></div>
                    </td>
                    <td>
                        <p class="h4 text-info">NOPEA VASTAUS</p>
                        <p class="h6">
                            Saat yleensä yhden arkipäivän sisällä useita lainatarjouksia, joista voit valita
                            sopivimman. Voit saada rahat tilillesi jopa samana päivänä.
                        </p>
                    </td>
                </tr>
            </table>
            <div class="custom-border">
            </div>
        </div>
        <div class="col-md-6 col-12 block_1_2 bg-w">
            <div class="mt-4 h3 ff-SFNSD text-info text-center">TÄYTÄ ILMAINEN LAINAHAKEMUS<br>
                (SAAT LAINAPÄÄTÖKSEN HETI)
            </div>
            <hr style="width: 240px">
            <div id="slider1" class="block_1_2_">
                <div class="title d-flex justify-content-between row">
                    <label class="col-4 align-self-center">Lainasumma:</label>
                    <input class="col-5 align-self-center value" type="text" name="amount" required="required"/>
                    <div class=" col-3 unit h3 align-self-center text-info ff-SFNSD">euroa</div>
                </div>
                <div class="choice d-flex justify-content-between row">
                    <label class=" col-2 from">500€</label>
                    <div class="col-8 slide align-self-center"></div>
                    <label class="col-2 to">50000€</label>
                </div>
            </div>
            <div id="slider2" class="block_1_2_">
                <div class="title d-flex justify-content-between row">
                    <label class="col-4 align-self-center">Lainasumma:</label>
                    <input class="col-5 align-self-center value" type="text" name="period" required="required"/>
                    <div class="col-3 unit h3 align-self-center text-info ff-SFNSD">euroa</div>
                </div>
                <div class="choice d-flex justify-content-between row">
                    <label class="col-2 from align-self-center">1 vuosi</label>
                    <div class="col-8 slide align-self-center"></div>
                    <label class="col-2 to align-self-center">15 vuotta</label>
                </div>
            </div>
            <div class="block_1_2_">
                <div class="title d-flex justify-content-between row">
                    <label class="col-4 align-self-center">Kuukausierä*:</label>
                    <input class="col-5 align-self-center value bg-blue" value="475" type="text" name="monthly_payment" required="required"/>
                    <div class="col-3 unit h3 align-self-center text-info ff-SFNSD">euroa</div>
                </div>
                <div class="title d-flex justify-content-between row">
                    <label class="col-4 align-self-center">Kulut & korot*:</label>
                    <input class="col-5 align-self-center value bg-blue" value="475" type="text" name="cost_and_interest" required="required"/>
                    <div class="col-3 unit h3 align-self-center text-info ff-SFNSD">euroa</div>
                </div>
                <div class="col-md-12 pull-right" id="myBtn">
                    <button class="btn btn-primary" type="button" onclick="$('#MainDiv').show(),$('#myBtn').hide()">Aloita lainahakemus</button>
                </div>
            </div>

        </div>
    </div>
    <div class="block_2 bg-w p-3" style="display: none" id="MainDiv">
        <section>
            <div class="h3 text-info">1. Henkilötiedot</div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Sähköpostiosoite</label>
                    <input type="text" class="w-100" name="email"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Etunimi</label>
                    <input type="text" name="first_name"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Sukunimi</label>
                    <input type="text" name="last_name"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Henkilötunnus</label>
                    <input type="text" name="ssn"/>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Siviilisääty</label>
                    <select class="" name="marital_status" >
                        <option value="">-Valitse-</option>
                        <option value="Naimisissa">Naimisissa</option>
                        <option value="Avoliitto">Avoliitto</option>
                        <option value="Naimaton">Naimaton</option>
                        <option value="Eronnut">Eronnut</option>
                        <option value="Leski">Leski</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Lapsien määrä</label>
                    <select name="no_of_children">
                        <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Aikuisten määrä taloudessa</label>
                    <select name="no_of_adults">
                        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Kansalaisuus</label>
                    <select name="citizenship" required="required">
                        <option value="">-Valitse-</option><option value="1">Suomi</option><option value="2">Muu</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="any_politically_influential">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h4 text-info">Minä tai perheenjäseneni on poliittisesti vaikutusvaltaisessa asemassa.</span>
                    </label>
                </div>
            </div>
        </section>
        <section>
            <div class="h3 text-info">2. Asuminen & yhteystiedot</div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Osoite</label>
                    <input type="text" name="address"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Postinumero</label>
                    <input type="text" name="zipcode"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Postitoimipaikka</label>
                    <input type="text" name="pobox"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Asumismuoto</label>
                    <select name="accomodation_type">
                        <option value="NotSpecified">-Valitse-</option><option value="OwnProperty">Oma asunto</option><option value="Tenant">Asumisoikeusasunto / Osa-omistus</option><option value="MunicipalTenancy">Kunnan vuokra-asunto</option><option value="PrivateTenancy">Yksityinen vuokra-asunto</option><option value="WithParents">Vanhempien luona</option><option value="Lodger">Muu</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>(Matka-)puhelin</label>
                    <input type="text" name="phone"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Asunnon tyyppi</label>
                    <select name="apartment_type">
                        <option value="">-Valitse-</option><option value="1">Omakotitalo</option><option value="2">Erillistalo</option><option value="3">Paritalo</option><option value="4">Rivitalo</option><option value="5">Kerrostalo</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Asunnon pinta-ala (m2)</label>
                    <input type="text" name="apartment_size"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Muuttoajankohta</label>
                    <input type="text" name="moving_time"/>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="summer_cottage">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h4 text-info">Minulla on kesäasunto / mökki</span>
                    </label>
                </div>
            </div>
        </section>
        <section>
            <div class="h3 text-info">3. Koulutus & työ</div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Koulutus</label>
                    <select name="education_level">
                        <option value="">-Valitse-</option><option value="Peruskoulu">Peruskoulu</option><option value="Lukio">Lukio</option><option value="Ammattikoulu/Opisto">Ammattikoulu/Opisto</option><option value="KorkeakouluAlempi">Alempi korkeakoulututkinto</option><option value="KorkeakouluYlempi">Ylempi korkeakoulututkinto</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Työsuhde</label>
                    <select name="employment_type">
                        <option value="">-Valitse-</option><option value="WorkerPermanent">Työntekijä (vakituinen)</option><option value="WorkerTemporary">Työntekijä (määräaikainen)</option><option value="PartTime">Osa-aikainen</option><option value="SelfEmployed">Yrittäjä</option><option value="Pensioner">Eläkeläinen</option><option value="Student">Opiskelija</option><option value="Unemployed">Työtön</option><option value="Misc">Muu</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Y-tunnus (Tarkista YTJ:stä »)</label>
                    <input type="text" class="" name="business_id"/>
                </div>
                {{--<div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>(Matka-)puhelin</label>
                    <select>
                        <option value="default">-Valitse-</option>
                    </select>
                </div>--}}
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Bruttopalkka kuukaudessa
                        <div class="h7">(ennen veroja)</div>
                    </label>
                    <input type="text" name="gross_monthly_income"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Nettopalkka kuukaudessa
                        <div class="h7">(verojen jälkeen)</div>
                    </label>
                    <input type="text" name="net_monthly_income"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Muut tulot kuukaudessa
                        <div class="h7">&nbsp;</div>
                    </label>
                    <input type="text" name="other_income_per_month"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Muiden tulojen lähde
                        <div class="h7">&nbsp;</div>
                    </label>
                    <input type="text" name="source_of_other_income"/>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Työsuhde</label>
                    <input type="text" name="employer"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Työsuhde alkanut</label>
                    <select name="employment_start_time">
                        <option value="">-kuukausi-</option><option value="1">tammikuu</option><option value="2">helmikuu</option><option value="3">maaliskuu</option><option value="4">huhtikuu</option><option value="5">toukokuu</option><option value="6">kesäkuu</option><option value="7">heinäkuu</option><option value="8">elokuu</option><option value="9">syyskuu</option><option value="10">lokakuu</option><option value="11">marraskuu</option><option value="12">joulukuu</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>&nbsp;</label>
                    <select name="employment_start_time_year">
                        <option value="">-year-</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
            </div>
        </section>
        <section>
            <div class="h3 text-info">4. Velat & menot</div>
            <table>
                <thead>
                <tr>
                    <th>Velkaerittely</th>
                    <th>Yhteensä jäljellä</th>
                    <th>Lyhennys / kk</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Asuntolaina</th>
                    <td class="input-text"><input type="text" value="0" name="mortage_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="mortage_month"/></td>
                    <td width="25%"></td>
                </tr>
                <tr>
                    <th>Kulutusluotot</th>
                    <td class="input-text"><input type="text" value="0" name="consumer_credit_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="consumer_credit_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Auto- ja venelainat</th>
                    <td class="input-text"><input type="text" value="0" name="boat_loan_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="boat_loan_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Luottokortti</th>
                    <td class="input-text"><input type="text" value="0" name="credit_card_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="credit_card_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Pikalainat</th>
                    <td class="input-text"><input type="text" value="0" name="quick_loan_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="quick_loan_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Takaukset</th>
                    <td class="input-text"><input type="text" value="0" name="guarantees_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="guarantees_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Maksettava elatusapu</th>
                    <td class="input-text"><input type="text" value="0" name="payabal_maintance_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="payabal_maintance_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Osamaksut</th>
                    <td class="input-text"><input type="text" value="0" name="installment_paln_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="installment_paln_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Muut velat</th>
                    <td class="input-text"><input type="text" value="0" name="other_debts_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="other_debts_month"/></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <label>
                <p class="h4 text-info">Mitä luottokortteja sinulla on?</p>
            </label>
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="credit_cards[]" value="Visa">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h5 text-muted">Visa</span>
                    </label>
                    <img class="credit-img" src="v2/src/img/visa.png">
                </div>
                <div class="col-4 col-md-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="credit_cards[]" value="MasterCard">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h5 text-muted">MasterCard</span>
                    </label>
                    <img class="credit-img" src="v2/src/img/mastercard.png">
                </div>
                <div class="col-4 col-md-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="credit_cards[]" value="American Express">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h5 text-muted">American Express</span>
                    </label>
                    <img class="credit-img" src="v2/src/img/american-express-logo.png">
                </div>
                <div class="col-4 col-md-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="credit_cards[]" value="Diners Club">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h5 text-muted">Diners Club</span>
                    </label>
                    <img class="credit-img" src="v2/src/img/dc.png">
                </div>
                <div class="col-4 col-md-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="credit_cards[]" value="Muita Kotteja">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description h5 text-muted">Muita Kotteja</span>
                    </label>
                    <img class="credit-img" src="v2/src/img/mk.png">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Asumiskulut €/kk
                        <div class="h7">(oma osuus numeroina)</div>
                    </label>
                    <input type="text" name="housing_cost_month"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Muut kulut €/kk
                        <div class="h7">(oma osuus numeroina)</div>
                    </label>
                    <input type="text" name="other_expenses_month"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Puolison kuukausitulot
                        <div class="h7">(Bruttopalkka ennen veroja)</div>
                    </label>
                    <input type="text" value="0" name="monthly_income_of_spouse"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Puolison kuukausimenot
                        <div class="h7">(puolison osuus numeroina)</div>
                    </label>
                    <input type="text" value="0" name="monthly_cost_of_spouse"/>
                </div>
            </div>
        </section>
        <section>
            <div class="h3 text-info">5. Pankkitiedot</div>
            <div class="row">
                <div class="col-12 col-md-7 col-lg-5  pankkitiedot-input">
                    <label>Pankkitili (IBAN)</label>
                    <input type="text" value="esim: f9890989057509676967404" name="bank_account"/>
                </div>
                <div class="col-10 col-md-4 col-lg-3 select-custom">
                    <label>BIC</label>
                    <select name="bic">
                        <option value="">-Valitse-</option><option value="HELSFIHH">Aktia Pankki | HELSFIHH</option><option value="CITIFIHX">Citibank | CITIFIHX</option><option value="DABAFIHH">Danske Bank | DABAFIHH</option><option value="HANDFIHH">Handelsbanken | HANDFIHH</option><option value="NDEAFIHH">Nordea Pankki | NDEAFIHH</option><option value="OMASP">OmaSp | OMASP</option><option value="OKOYFIHH">Osuuspankki / Pohjola | OKOYFIHH</option><option value="POPFFI22">POP | POPFFI22</option><option value="SBANFIHH">S-Pankki | SBANFIHH</option><option value="ITELFIHH">Säästöpankki | ITELFIHH</option><option value="ESSEFIHX">Skandinaviska Enskilda Banken | ESSEFIHX</option><option value="SWEDFIHH">Swedbank | SWEDFIHH</option><option value="TAPIFI22">Tapiola Pankki | TAPIFI22</option><option value="AABAFI22">Ålandsbanken | AABAFI22</option>
                    </select>
                </div>
            </div>
        </section>
        <section>
            <div class="h3 text-info">6. Yhteishakija</div>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" onclick="$(this).is(':checked')?$('#jointUserDiv').show():$('#jointUserDiv').hide()">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description h4 text-info">
                            Haen lainaa yhdessä toisen henkilön kanssa<br>
                            (Parantaa mahdollisuuksia saada lainaa matalalla korolla!)</span>
            </label>
            <div id="jointUserDiv" style="display: none">
            <p class="h4 text-info pt-3 pb-3">6.1 Yhteishakijan tiedot</p>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Etunimi</label>
                    <input type="text" name="joint_first_name"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Sukunimi</label>
                    <input type="text" class="" name="joint_last_name"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Henkilötunnus</label>
                    <input type="text" class="" name="joint_ssn"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Sähköpostiosoite</label>
                    <input type="text" class="" name="joint_email"/>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Puhelinnumero
                        <div class="h7">&nbsp;</div>
                    </label>
                    <input type="text" name="joint_phone"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Nettopalkka kuukaudessa
                        <div class="h7">(verojen jälkeen)</div>
                    </label>
                    <input type="text" name="joint_net_salary_per_month"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Koulutus
                        <div class="h7">&nbsp;</div>
                    </label>
                    <select name="joint_education_level">
                        <option value="">-Valitse-</option><option value="Peruskoulu">Peruskoulu</option><option value="Lukio">Lukio</option><option value="Ammattikoulu/Opisto">Ammattikoulu/Opisto</option><option value="KorkeakouluAlempi">Alempi korkeakoulututkinto</option><option value="KorkeakouluYlempi">Ylempi korkeakoulututkinto</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 select-custom">
                    <label>Työsuhde
                        <div class="h7">&nbsp;</div>
                    </label>
                    <select name="joint_employment_type">
                        <option value="">-Valitse-</option><option value="WorkerPermanent">Työntekijä (vakituinen)</option><option value="WorkerTemporary">Työntekijä (määräaikainen)</option><option value="PartTime">Osa-aikainen</option><option value="SelfEmployed">Yrittäjä</option><option value="Pensioner">Eläkeläinen</option><option value="Student">Opiskelija</option><option value="Unemployed">Työtön</option><option value="Misc">Muu</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12 col-md-6 col-lg-3 input-text">
                    <label>Y-tunnus (Tarkista YTJ:stä »)</label>
                    <input type="text" name="joint_business_id"/>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
            </div>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description h4 text-info">
                            Yhteishakija tai yhteishakijan perheenjäsen on poliittisesti vaikutusvaltaisessa asemassa.
                        </span>
            </label>
            <p class="h4 text-info pt-4 pb-3">6.2 Velat & menot</p>
            <table>
                <thead>
                <tr>
                    <th>Yhteishakijan velat</th>
                    <th>Yhteensä jäljellä</th>
                    <th>Lyhennys / kk</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Asuntolaina</th>
                    <td class="input-text"><input type="text" value="0" name="mortage_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="mortage_joint_month"/></td>
                    <td width="25%"></td>
                </tr>
                <tr>
                    <th>Kulutusluotot</th>
                    <td class="input-text"><input type="text" value="0" name="consumer_credit_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="consumer_credit_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Auto- ja venelainat</th>
                    <td class="input-text"><input type="text" value="0" name="boat_loan_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="boat_loan_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Luottokortti</th>
                    <td class="input-text"><input type="text" value="0" name="credit_card_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="credit_card_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Pikalainat</th>
                    <td class="input-text"><input type="text" value="0" name="quick_loan_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="quick_loan_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Takaukset</th>
                    <td class="input-text"><input type="text" value="0" name="guarantees_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="guarantees_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Maksettava elatusapu</th>
                    <td class="input-text"><input type="text" value="0" name="payabal_maintance_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="payabal_maintance_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Osamaksut</th>
                    <td class="input-text"><input type="text" value="0" name="installment_paln_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="installment_paln_joint_month"/></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Muut velat</th>
                    <td class="input-text"><input type="text" value="0" name="other_debts_joint_left"/></td>
                    <td class="input-text"><input type="text" value="0" name="other_debts_joint_month"/></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <p class="h4 text-info pt-4 pb-3">6.3 Yhteishakijan hyväksynnät</p>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="joint_venture_approval">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description h4 text-info">
                            Luotonmyöntäjät saavat hakea Suomen Asiakastieto Oy:n kyselyjärjestelmästä yhteishakijan tiedot. (Parantaa lainansaantimahdollisuuksia!)
                        </span>
            </label>
            </div>
        </section>
        <section>
            <div class="h3 text-info">7. Hyväksy lainahakemus</div>
            <div class="row form-group pb-3">
                <div class="col-10 col-md-4 col-lg-3 select-custom">
                    <label>Lainan käyttötarkoitus</label>
                    <select name="purpose_of_loan">
                        <option value="">-Valitse-</option><option value="Tuotteiden tai palveluiden ostaminen">Tuotteiden ja palveluiden ostaminen (ml. päivittäiset maksut)</option><option value="Muun kiinteistön (ei asuinkiinteistö) ostaminen">Muun kiinteistön (ei asuinkiinteistö) ostaminen omaan käyttöön</option><option value="Arvopapereiden ostaminen">Arvopapereiden ostaminen</option><option value="Yritystoiminta (tarkenna)">Yrityksen kaupallisen toiminnan aloittaminen</option><option value="REFIN_Yritystoiminta (tarkenna)">Yrityksen kaupallisen toiminnan laajentaminen</option><option value="Kodin ostaminen tai remontoiminen">Asunnon ostaminen/remontoiminen</option><option value="REFIN_Tuotteiden tai palveluiden ostaminen">Muun käyttöomaisuuden ostaminen (ml. ajoneuvot)</option><option value="Opiskelua varten">Opiskelun rahoittamista varten</option><option value="Jollekin toiselle henkilölle">Jollekin toiselle henkilölle</option><option value="Matkustaminen">Matkustaminen</option><option value="Yhdistelylaina">Lainojen yhdistäminen</option><
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
                <div class="col-12 col-md-6 col-lg-3 input-text"></div>
            </div>
            <label class="custom-control custom-checkbox ">
                <input type="checkbox" class="custom-control-input" required="required">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description h4 text-info">
                            Hyväksyn Omalaina.fin yleiset palveluehdot.
                        </span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" required="required">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description h4 text-info">
                            Luotonmyöntäjät saavat hakea Suomen Asiakastieto Oy:n kyselyjärjestelmästä tietoni.
                        (Parantaa lainansaantimahdollisuuksia!)
                        </span>
            </label>

        </section>
        <div class="Hae-Nyt-button">

            <input type="image" src="v2/src/img/button.png"/>

        </div>
    </div>
    </form>
</div>
<footer class="d-flax flex-column ff-ASUF">
    <div class=" w-100 about p-3">
        <div class="container row m-auto">
            <div class="col-12 col-md-6">
                <table class="h4 text-white">
                    <tr>
                        <td width="165px">LISÄTIETOA KOROSTA</td>
                        <td width="*">
                            <hr style="width: 100%">
                        </td>
                    </tr>
                </table>
                <p class="h6">
                    Esimerkkilaskelma: Todellinen vuosikorko on 13,12 %, kun lainasumma on 10 000 €,
                    takaisinmaksuaika on 5 vuotta, tilinhoitomaksu 5 €, avausmaksu 150 € ja esimerkkikorko 10,9 %.
                    Takaisinmaksettava summa on tällöin 13 465 €, eli 216,93 €/kk. Todellinen vuosikorko 4,9-50%.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <table class="h4 text-white">
                    <tr>
                        <td width="95px">LISÄTIETOJA</td>
                        <td width="*">
                            <hr style="width: 100%">
                        </td>
                    </tr>
                </table>
                <p class="h6">
                    Arkadia Rahoitus on kotimainen palvelu, joka toimii apunasi lainanhaussa. Lähetämme
                    lainahakemuksesi eteenpäin lainanvälittäjälle, joka kilpailuttaa hakemuksesi pankeilla ja
                    rahoitusyhtiöillä. Arkadia Rahoitus markkinoi Freedom Rahoituksen ja Rahalaitoksen luvanvaraisia
                    lainanvälityspalveluja. Autamme sinua myös lainanhaussa vertailemalla eri pankkeja ja
                    rahoitusyhtiöitä sekä jaamme hyödyllisiä talousvinkkejä. Palvelu on maksuton eikä sido sinua
                    mihinkään. <span class="text-white">Rekisteriselosteen löydät tästä.</span>
                </p>
            </div>
        </div>
        <img class="up-arrow" src="v2/src/img/up-arrow.png">

    </div>
    <div class="container copy-right w-100 bg-faded text-center p-3">
        <p class="h4 text-white">Ajankohtaista lainoista - Laina FAQ - Yrityslaina - Ota yhteyttä</p>
        <p class="h7">Arkadia Rahoitus © 2017 | Linnankoskenkatu 1 A 11 | 00250 Helsinki |
            asiakaspalvelu@arkadiarahoitus.fi | Y-tunnus: FI-24645516</p>
    </div>
</footer>


<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>

<script
        src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>

<script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>

<!--<script src={{asset("v2/assets/js/bundle.js")}}></script>-->
<script src="{{asset("v2/src/js/index.js")}}"></script>
</body>
</html>