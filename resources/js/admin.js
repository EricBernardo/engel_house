const SimpleMaskMoney = require("simple-mask-money");

const args = {
    afterFormat(e) {
        console.log("afterFormat", e);
    },
    allowNegative: false,
    beforeFormat(e) {
        console.log("beforeFormat", e);
    },
    negativeSignAfter: false,
    prefix: "",
    suffix: "",
    fixed: true,
    fractionDigits: 2,
    decimalSeparator: ",",
    thousandsSeparator: ".",
    cursor: "move",
};

// select the element
const input = SimpleMaskMoney.setMask("#inputPrice", args);

input.formatToNumber();

const FroalaEditor = require("froala-editor");

import "froala-editor/js/plugins/align.min.js";

new FroalaEditor("#editorDescription");
