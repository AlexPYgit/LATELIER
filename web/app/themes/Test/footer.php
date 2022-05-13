


</div>

<footer>
    <div class="py-4">
        <div>
            <div class="text-center" >
                <div class="text-center">
                    <div class="m-2"><h2>Trouver un autre cours ? </h2></div>
                    <div class="autoComplete_wrapper ">
                        <input id="autoComplete" type="search" dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off" maxlength="2048" tabindex="1">
                    </div>
                    <div class="btn btn-success ">Rechercher</div>

                    <div class="selection"></div>

                </div>
            </div>
        </div>
    </div>
    <div></div>
   
</footer>
 <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
    <script>
        const autoCompleteJS = new autoComplete({
            placeHolder: "Saissie un titre de cour",
            data: {
                src: async ()=> {
            let rep = await fetch('https://bedrock.local/wp-json/wp/v2/posts');
            let data = await rep.json();
            let arrayTitle = data.map(obj => obj.title.rendered)
            return  arrayTitle;
                   },
                cache: true,
            },
            resultItem: {
                highlight: true
            },
            events: {
                input: {
                    selection: (event) => {
                        const selection = event.detail.selection.value;
                        autoCompleteJS.input.value = selection;
                    }
                }
            }
        });
    </script>
    <script type="module">

  var slider = tns({
    container: '.my-slider',
    autoHeight: true,
    items: 2.5,
    gutter: '20px',
    swipeAngle: 15,
    speed: 400
  });
  </script>
</body>
</html>
