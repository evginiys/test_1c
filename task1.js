function brackets(str) {
    var chars = str.split(''),
        stackOfBrackets = [],
        stackElements = [],
        openBracket = '(',
        closeBracket = ')',
        plusAndMinus = ['+', "-"],
        sign = ["+", "-", "*", "/"];
    for (var i = 0, len = chars.length; i < len; i++) {
        if (chars[i] == " ") {
            continue;
        }
        if (chars[i] == openBracket) {
            let prev = stackElements[stackElements.length-1];
            if (prev == undefined || prev == openBracket || sign.includes(prev)) {
                stackOfBrackets.push(1);
                stackElements.push(openBracket);
                continue;
            } else {
                console.log("error, incorrect open bracket");
                return false;
            }
        }
        if (chars[i] == closeBracket) {
            existOpen = stackOfBrackets.pop();
            let prev = stackElements[stackElements.length-1];
            if ((prev == openBracket || isFinite(prev)) && existOpen) {
                stackElements.push(openBracket);
                continue;
            } else {
                console.log("error, incorrect close bracket");
                return false;
            }
        }
        if (isFinite(chars[i])) {
            let prev = stackElements[stackElements.length-1];
            if (prev == openBracket || sign.includes(prev) || prev == undefined) {
                let digit = chars[i];
                while (isFinite(chars[i+1]) || chars[i+1] == ".") {
                    i++;
                    digit += chars[i];
                }
                stackElements.push(digit);
                continue;
            } else {
                console.log("error, incorrect digit");
                return false;
            }
        }

        if (sign.includes(chars[i])) {
            let prev = stackElements[stackElements.length-1];
            if (prev == closeBracket || isFinite(prev) || prev == openBracket || prev == undefined) {
                if(plusAndMinus.includes(chars[i])){
                    stackElements.push(chars[i]);
                    continue;
                }else{
                    if(prev == closeBracket || isFinite(prev))
                    {
                        stackElements.push(chars[i]);
                        continue;
                    }else{
                        console.log("error, incorrect sign");
                        return false;
                    }
                }
            } else {
                console.log("error, incorrect sign");
                return false;
            }
        }
    }
    if (stackOfBrackets.length !== 0) {
        return false;
    }
    return true;
}