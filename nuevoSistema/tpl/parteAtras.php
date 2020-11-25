<article class="carnet atras">
    <div id="qrcode#<?=$carnet?>" class="qr"></div>
    <script type="text/javascript">
      new QRCode("qrcode#<?=$carnet?>", {
        text: "<?=$carnet?>",
        width: 150,
        height: 150
      });
    </script>
</article>