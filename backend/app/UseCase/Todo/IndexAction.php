<php>
  <!-- Todo一覧取得 -->
  class IndexAction
  {
  public function __construct(
  private TodoRepository $todoRepository
  ) {
  }

  }