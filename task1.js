function brackets(str) {
    var chars = str.split(''),
        stack = [];
    openBracket = '(';
    closeBracket = ')';
    close;
    open;
    for (var i = 0, len = chars.length; i < len; i++) {
        open = chars[i] == openBracket ? 1 : -1;
        if (open != -1) {
            stack.push(open);
            continue;
        }
        close = chars[i] == closeBracket ? 1 : -1;
        if (close != -1) {
            existOpen = stack.pop();
            if (!existOpen) {
                console.log("no open " + existOpen)
                return false;
            }
        }
    }
    if (stack.length !== 0) {
        return false;
    }
    return true;
}