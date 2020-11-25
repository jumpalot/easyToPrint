<article class="carnet" <?=@$unico?>>
    <div class="marcagua">
        <img src="/img/logo-m.jpg" width=100% height="100%"/>
    </div>
    <section class="ncarnet rotate">
        <img class="imgbar" src="/img/borde.jpg" width="300" height="50">
        <div class="datocarnet"><h1>Nº <?=$carnet?></h1></div>
    </section>
    <section class="banner">
        <div class="logo">
            <img src="/img/logo-s.jpg" width="100%" height="100%" >
        </div>
        <h1>E.E.S.T.Nº3 - E.E.S.Nº7</h1>
        <h3>Las Araucarias 1450 - Tortuguitas</h3>
    </section>
    <section class="datos">
        <span id="nombre"><?=$nombre?></div><br>
        <span id="dni"> DNI <?=$dni?></span><br>
        <span id="turno">TURNO <?=$turno?></span>
    </section>
    <section class='curso'>
        <span><?="$curso $escuela"?></span>
    </section>
    <section class="barcode-box">
        <section class="barcode<?=$carnet?>">
            <div>
                <img id="barcode<?=$carnet?>" class="barcode-img"/>
                <script>
                    JsBarcode("#barcode<?=$carnet?>", "<?=$dni?>", {
                        format:"CODE128",
                        displayValue:true,
                        fontSize:20,
                        lineColor: "#000",
                    });
                </script>
            </div>
        </section>
    </section>
    <section class="foto">
        <img src="data:image/jpeg;base64, <?=$foto?>" width="150" height="200">
    </section>
</article>