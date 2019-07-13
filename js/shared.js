/**
 * Hex code generator
 *
 * @author Dale Nash
 * @returns string
 */
function randomHex() {
    const hexMax = 256 * 256 * 256;
    return '#' + Math.floor(Math.random() * hexMax).toString(16).toUpperCase().padStart(6, '0');
}