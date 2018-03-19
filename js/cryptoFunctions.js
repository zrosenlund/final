

//NUMBERS TO LETTERS FUNCTION ****************
function numbersToLetters(int) {
    int = int.toLowerCase();
    if (!isNaN(int)) {
        return int.split(' ').map(function (c) {
            return 'abcdefghijklmnopqrstuvwxyz'.charAt(c - 1);
        }).join(' ');
    }

}

//LETTERS TO NUMBERS FUNCTION ****************
function lettersToNumbers(string){
    string = string.toLowerCase();
    return string.split('').map(function (c) {
        return 'abcdefghijklmnopqrstuvwxyz'.indexOf(c) + 1;
    }).join(' ');
}

//BINARY TO DECMIAL******************************
(function(){

    var ConvertBase = function (num) {
        return {
            from : function (baseFrom) {
                return {
                    to : function (baseTo) {
                        return parseInt(num, baseFrom).toString(baseTo);
                    }
                };
            }
        };
    };

    ConvertBase.bin2dec = function (num) {
        return ConvertBase(num).from(2).to(10);
    };

    this.ConvertBase = ConvertBase;

})(this);