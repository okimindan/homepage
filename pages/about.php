<section>
  <h1>このサイトについて</h1>
  <p>このサイトは、共通のヘッダー／フッターと、ページごとのテンプレートで構成されています。</p>
  <ul>
    <li><code>index.php</code>：ルーティングとページ読み込み</li>
    <li><code>partials/</code>：ヘッダー・フッター等の共通パーツ</li>
    <li><code>pages/</code>：各ページの中身</li>
    <li><code>assets/</code>：CSS・JS</li>
  </ul>

  <div class="card">
    <h2>ポイント</h2>
    <ol>
      <li>不正な?page=は404にフォールバック</li>
      <li>ナビの「active」表示で現在ページを視覚化</li>
      <li>HTML/CSS/JSを分割しつつ、PHPでサーバー側ロジックを実装</li>
    </ol>
  </div>
</section>
