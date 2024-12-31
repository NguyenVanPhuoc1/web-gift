var input = document.getElementById('email');

/// change text input
var customNodeCreator = function (character) {
    // Add character to input placeholder
    input.placeholder = input.placeholder + character;

    // Return null to skip internal adding of dom node
    return null;
}

var onRemoveNode = function ({ character }) {
    if (input.placeholder) {
        // Remove last character from input placeholder
        input.placeholder = input.placeholder.slice(0, -1)
    }
}

var typewriter = new Typewriter(null, {
    loop: true,
    delay: 75,
    onCreateTextNode: customNodeCreator,
    onRemoveNode: onRemoveNode,
});

typewriter
    .typeString('Nhập email của bạn.')
    .pauseFor(300)
    .start();



//change text title name shop

var shopName = document.querySelector(".wrap-about .title-about h2");
var createShopName = function(character) {
    return document.createTextNode(character);
}
var typewriterShopName = new Typewriter(shopName, {
    loop: true,
    delay: 200,
    onCreateTextNode: createShopName,
});

typewriterShopName
    .typeString('<strong>Shop Gift</strong>')
    .pauseFor(1500)
    .deleteChars(9)
    .typeString('<strong>Cửa hàng <span style="color: #3eaee2;">Quà Tết</span> </strong>')
    .pauseFor(2500)
    .start();
