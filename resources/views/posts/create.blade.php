新增文章

<form action="{{ route('posts.store') }}" method="POST">
	{{--
	@csrf 解釋
	CSRF，或者說 Cross-site request forgery，也就是跨站請求偽造，是一種網站的攻擊方式。
	這種攻擊方式，是明明不是用戶自己的輸入，但是其他人偽造成該用戶的身份，假裝是該用戶進行發出請求。
	要避免這種攻擊，其中一種方式就是在表單內多加一個 token。這個 token 是攻擊者無法取得的。這樣的話，即使攻擊者可以偽造成該用戶的身份，但是因為他無法取得這個 token，那麼他的請求就無法通過。
	--}}
	@csrf
	<label>內容：
		<textarea name="content" value="" style="background-color:gray"></textarea>
	</label><br>
	<input type="submit" value="送出文章" style="background-color:gray">
</form>
