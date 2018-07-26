<script type="text/javascript">
    $(document).ready(function() {

        $('.POhover').on('mouseenter', event => {
            $('.subPO').css({
                borderBottom: '5px solid #da172a'
            })
        });
        $('.POhover').on('mouseleave', event => {
            $('.subPO').css({
                borderBottom: '0px solid #da172a'
            })
        });

        $('.TChover').on('mouseenter', event => {
            $('.subTC').css({
                borderBottom: '5px solid #da172a'
            })
        });
        $('.TChover').on('mouseleave', event => {
            $('.subTC').css({
                borderBottom: '0px solid #da172a'
            })
        });

    });

</script>
<div id="legal" class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 mx-auto mt-3">
            <div class="bgPhoto">
                <h1>Mentions Legal</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 main POhover">
            <a href="./views/PO.view.php">
                <h4 class="POhover">Politique de confidentialité</h4>
            </a>
            <div class="subPO">
                <p>Nous reconnaissons que la confidentialité est importante et que votre confidentialité est notre principale préoccupation.
                    <br>Nous vous encourageons à lire notre politique de confidentialité et à nous contacter si vous avez des questions ou des préoccupations.</p>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 main TChover">
            <a href="##">
                <h4 class="TChover">Thermes et conditions</h4>
            </a>
            <div class="subTC">
                <p>Les conditions générales de vente régissent votre utilisation de notre site Web et la manière dont vous devez vous comporter. S'il vous plaît assurez-vous de les regarder.</p>
            </div>
        </div>
    </div>
</div>
