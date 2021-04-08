export class CreateSprie {
  init() {
    requireAll(require.context('../../img/icon/', true, /\.svg$/));
  }
}
//sprite生成
function requireAll(r) {
  r.keys().forEach(r)
}
