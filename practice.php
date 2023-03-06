<?php
class HeloGithubActions {
    public function get_fields() {
        return [
            'title' => array(
                'name' => esc_html('Title', 'basic-ci-cd')
            )
        ];
    }

    public function render() {
        return sprintf('Hello from Basic Practice of CI/CD');
    }
}
new HeloGithubActions;