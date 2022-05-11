//@collapse
var editors = [];

function createEditor(elementId) {
    return ClassicEditor
        .create(document.querySelector('#' + elementId), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'imageUpload',
                    'blockQuote',
                    'insertTable',
                    'mediaEmbed',
                    'undo',
                    'redo',
                    'CKFinder',
                    'alignment',
                    'fontColor',
                    'fontFamily',
                    'fontBackgroundColor',
                    'findAndReplace',
                    'fontSize',
                    'highlight'
                ],
                shouldNotGroupWhenFull: true
            },

            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side',
                    'linkImage'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells',
                    'tableCellProperties',
                    'tableProperties'
                ]
            },
            licenseKey: '',
        })
        .then(editor => {
            window.editors = editor;
        })
        .catch(error => {

            console.log(error);
        });
}
