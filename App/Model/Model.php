<?php

namespace App\Model;

abstract class Model
{
	public array $rows = [];

	public array $errors = [];

	final public function setErrors(string $message): void
	{
		$this->errors[$message];
	}

	final public function getErrors(string $type, string $message): string
	{
		// danger, success, warning, info
		$output = "<div class='alert alert-{$type}' id='alertaErro' role='alert' style='display: flex;'>";
		$output .= "<strong>{$message}</strong>";

		if (!empty($this->errors)) {
			$output .= "<ul class='mb-0'>";
			foreach ($this->errors as $error) {
				$output .= "<li>$error</li>";
			}
			$output .= "</ul>";
		}

		$output .= "<button type='button' class='btn-close' id='btnFecharAlerta' data-bs-dismiss='alert' aria-label='Close'></button>";
		$output .= "</div>";
		return $output;
	}
}
