<?php

namespace InkApplications\TrelloApi\Board;

use Tebru\Retrofit\Annotation as Rest;

interface BoardService
{
    /**
     * @Rest\GET("/board/{id}")
     * @Rest\Returns("InkApplications\TrelloApi\Board\Board")
     * @return Board
     */
    public function getBoard($id);
}
