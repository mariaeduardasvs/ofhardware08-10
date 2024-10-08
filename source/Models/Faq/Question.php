<?php

namespace Source\Models\Faq;

use Source\Core\Connect;
use Source\Core\Model;

class Question extends Model {
    protected $id;
    protected $question;
    protected $answer;

    /**
     * @param int|null $id
     * @param string|null $question
     * @param string|null $answer
     */
    public function __construct(
        int $id = null,
        string $question = null,
        string $answer = null
    )
    {
        $this->id = $id;
        $this->question = $question;
        $this->answer = $answer;
        $this->entity = "questions";

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }


    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): void
    {
        $this->question = $question;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): void
    {
        $this->answer = $answer;
    }


}
