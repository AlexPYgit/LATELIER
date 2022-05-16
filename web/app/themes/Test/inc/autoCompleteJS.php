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
    <script type="module"></script>