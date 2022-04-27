<?php

namespace Manuxi\GoogleReviewsBundle\Model;

class Review
{
    /**
     * @var string
     */
    private $author_name;
    /**
     * @var string
     */
    private $author_url;
    /**
     * @var string
     */
    private $language;
    /**
     * @var string
     */
    private $profile_photo_url;
    /**
     * @var int
     */
    private $rating;
    /**
     * @var string
     */
    private $relative_time_description;
    /**
     * @var string
     */
    private $text;
    /**
     * @var int
     */
    private $time;

    public function getAuthor_Name(): string
    {
        return $this->author_name;
    }

    public function setAuthor_Name(string $authorName): void
    {
        $this->author_name = $authorName;
    }

    public function getAuthor_Url(): string
    {
        return $this->author_url;
    }

    public function setAuthor_Url(string $authorUrl): void
    {
        $this->author_url = $authorUrl;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    public function getProfile_Photo_Url(): string
    {
        return $this->profile_photo_url;
    }

    public function setProfile_Photo_Url(string $profilePhotoUrl): void
    {
        $this->profile_photo_url = $profilePhotoUrl;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    public function getRelative_Time_Description(): string
    {
        return $this->relative_time_description;
    }

    public function setRelative_Time_Description(string $relativeTimeDescription): void
    {
        $this->relative_time_description = $relativeTimeDescription;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getTime(): int
    {
        return $this->time;
    }

    public function setTime(int $time): void
    {
        $this->time = $time;
    }
}
