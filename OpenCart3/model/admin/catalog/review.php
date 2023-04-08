<?php

namespace Admin;

abstract class ModelCatalogReview extends Model {
    /**
     * @param array $data
     * @return int
     */
    abstract public function addReview(array $data): int;

    /**
     * @param int $review_id
     * @param array $data
     * @return void
     */
    abstract public function editReview(int $review_id, array $data): void;

    /**
     * @param int $review_id
     * @return void
     */
    abstract public function deleteReview(int $review_id): void;

    /**
     * @param int $review_id
     * @return array
     */
    abstract public function getReview(int $review_id): array;

    /**
     * @param array $data
     * @return array
     */
    abstract public function getReviews(array $data = array()): array;

    /**
     * @param array $data
     * @return int
     */
    abstract public function getTotalReviews(array $data = array()): int;

    /**
     * @return int
     */
    abstract public function getTotalReviewsAwaitingApproval(): int;
}