<?
	namespace Telegram\Method;

	use Telegram\IMethodParsable;
	use Telegram\Model\Object\FullDocument;

	class GetFile extends BaseMethod implements IMethodParsable {

		private $fileId;


		public function __construct($fileId) {
			$this->fileId = $fileId;
		}

		public function getMethod() {
			return "getFile";
		}

		public function getParams() {
			return [ "file_id" => $this->fileId ];
		}

		/**
		 * Parse response from API to objects
		 * @param object $result
		 * @return FullDocument
		 */
		public function parseResponse($result) {
			return new FullDocument($result);
		}
	}