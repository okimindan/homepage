<section>
  <h1>お問い合わせ</h1>
  <p>このフォームはデモです（送信処理は実装していません）。</p>
  <form class="card" method="post" action="#" onsubmit="alert('デモのため送信しません'); return false;">
    <label>お名前
      <input type="text" name="name" placeholder="山田 太郎" required />
    </label>

    <label>メールアドレス
      <input type="email" name="email" placeholder="you@example.com" required />
    </label>

    <label>内容
      <textarea name="message" rows="4" placeholder="お問い合わせ内容を入力してください" required></textarea>
    </label>

    <button type="submit">送信</button>
  </form>
</section>
