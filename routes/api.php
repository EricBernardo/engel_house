<?php

use App\Mail\NotificationBoadGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/boardgame', function () {


    $curl = curl_init();

    $url = 'https://www.amazon.com.br/gp/product/B0C839TQVF?null=null&linkCode=sl1&tag=jcdisciple03-20&linkId=b49c4bc42ec1d6e2f32cf65a17fa313d&language=pt_BR&ref_=as_li_ss_tl';
    // $url = 'https://www.amazon.com.br/Gal%C3%A1pagos-Jogos-Senhor-Dos-An%C3%A9is/dp/B07R1DJFV2/?_encoding=UTF8&pd_rd_w=keKtG&content-id=amzn1.sym.9a79939f-db4f-4253-8a7f-095dfe9801c5%3Aamzn1.symc.e5c80209-769f-4ade-a325-2eaec14b8e0e&pf_rd_p=9a79939f-db4f-4253-8a7f-095dfe9801c5&pf_rd_r=V5NKNFNX5PXDJPGY07S4&pd_rd_wg=jd2l6&pd_rd_r=855afc50-8c23-4077-a99a-cfb922f7e0e1&ref_=pd_gw_ci_mcx_mr_hp_atf_m';

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Cookie: i18n-prefs=BRL; lc-acbbr=pt_BR; session-id=134-2786087-6411750; session-id-time=2082787201l; session-token="7kKLQx4z0T2cR8Ly34FWxB0fT1Q9p8NSlCD8y+X2Au9vczlqoNM+L4iVgVdCvpPMRSrxjbM+TtUWanV2N5DcjXo+qC6tgN9sutrlZmyYm+okFjbucZbe+69BSJ0A7wzmYj2PjWHLzSFnuEqRm7ditWKEG0e6zZsJaJR31YQCSuwdpNwuNPCjMF2nTAmemppFyQYQXyW5Ivg4D+ax3+fynM9Ve6Gyu5WX4gViCrW4F1yhPrU4m9KoVsdE03Ib9eUZB/xjEKrw6i/O9W7L48lKENlstqYxR1f8u1UulvKQsTP9Th5uykEhneT5lLv5QnzEm5IdmbQ30arcU9WuGcXSb2Ey8Bhs8PghxDxKQn1mGkI="; ubid-acbbr=135-0594035-4331355'
        ),
    ));

    $response = curl_exec($curl);

    // curl_close($curl);
    // echo $response;
    // die;
    // session_start();
    // dd($_SESSION['test']);
    // $_SESSION['test'] = $response;
    // dd(session()->all());
    // die("FM");
    // $response = $_SESSION['test'];
    // die($_SESSION['test']);
    // $classname = 'a-price-whole';
    // $dom = new DOMDocument;
    // $dom->loadHTML($_SESSION['test']);
    // $xpath = new DOMXPath($dom);
    // dd($xpath);
    // $results = $xpath->query("//*[@class='" . $classname . "']");

    // if ($results->length > 0) {
    //     echo $review = $results->item(0)->nodeValue;
    // }

    // $doc = hQuery::fromUrl('https://www.amazon.com.br/gp/product/B0C839TQVF?null=null&linkCode=sl1&tag=jcdisciple03-20&linkId=b49c4bc42ec1d6e2f32cf65a17fa313d&language=pt_BR&ref_=as_li_ss_tl', ['Accept' => 'text/html,application/xhtml+xml;q=0.9,*/*;q=0.8']);


    $results = [];

    $doc = hQuery::fromHTML($response);
    $aPriceWhole = $doc->find('#apex_desktop .a-price-whole');

    if ($aPriceWhole) {
        $results[] = [
            'data' =>  $aPriceWhole,
            'decimal' => 1
        ];
    }

    if ($count = $doc->find('#mbc .pa_mbc_on_amazon_offer')) {
        for ($x = 0; $x < count($count); $x++) {
            $vendas_amazon = $doc->find('#mbc #mbc-price-' . ($x + 1));
            if ($vendas_amazon) {
                $results[]['data'] = $vendas_amazon;
            }
        }
    }

    $value = 0;

    if (count($results)) {

        foreach ($results as $items) {

            foreach ($items['data'] as $item) {

                $value = preg_replace('/\D/', '', $item->text());

                if (isset($items['decimal'])) {
                    $value = ($value . '99');
                }

                $value = $value / 100;

                if ($value > 0 && $value < 100) {
                    Mail::to('eric.bernardo.sousa@gmail.com')->send(new NotificationBoadGame($value));
                }

                if (env('SEND_VALUE', false)) {
                    Mail::to('eric.bernardo.sousa@gmail.com')->send(new NotificationBoadGame($value));
                }
            }
        }

        die("COM RESULTADO: " . $value);
    } else {
        die("SEM RESULTADO");
    }
});
