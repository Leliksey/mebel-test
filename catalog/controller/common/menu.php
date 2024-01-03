<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');
		$this->load->model('tool/image');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

					$children_data[] = array(
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}
				if ($category['image']) {
					$image = $this->model_tool_image->resize($category['image'], 40, 35);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', 40, 35);
				 }
				if ($category['icon']) {
					$icon = $this->model_tool_image->resize($category['icon'], 40, 35);
				} else {
					$icon = $this->model_tool_image->resize('placeholder.png', 40, 35);
				 }
				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id']),
					'image' => $image,
					'icon' => $icon,
				);
			}
		}

		return $this->load->view('common/menu', $data);
	}
}
