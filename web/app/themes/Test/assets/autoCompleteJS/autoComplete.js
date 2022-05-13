// // The autoComplete.js Engine instance creator





// const autoCompleteJS = new autoComplete(
//     {
//          data: {
//     src: ["Sauce - Thousand Island", "Wild Boar - Tenderloin", "Goat - Whole Cut"]
//     // async () => {
//     //   try {
//     //     // Loading placeholder text
//     //     document.getElementById("autoComplete").setAttribute("placeholder", "Loading...");
//     //     // Fetch External Data Source
//     //     const source = await fetch("https://bedrock.local/wp-json/wp/v2/posts?page=0&per_page=0");
//     //     const data = await source.json();
//     //     // Post Loading placeholder text
//     //     document.getElementById("autoComplete").setAttribute("placeholder", autoCompleteJS.placeHolder);
//     //     // Returns Fetched data
//     //     return data;
//     //   }
//     //    catch (error) {
//     //     return error;
//     //   }
//     // }
//     },
//      resultItem: {
//                 highlight: true
//             },
//             events: {
//                 input: {
//                     selection: (event) => {
//                         const selection = event.detail.selection.value;
//                         autoCompleteJS.input.value = selection;
//                     }
//                 }
//             },
//     placeHolder: "Search for Food & Drinks!",

// });