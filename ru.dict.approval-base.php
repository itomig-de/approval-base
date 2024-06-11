<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 *
 */
Dict::Add('RU RU', 'Russian', 'Русский', [
	'Approval:Abort:Explain' => 'You have requested to <b>bypass</b> the approval process. This will stop the process and none of the approvers will be allowed to give their answer anymore.~~',
	'Approval:Action-Abort' => 'Bypass the approval process~~',
	'Approval:Action-Approve' => 'Approve~~',
	'Approval:Action-ApproveOrReject' => 'Approve or Reject~~',
	'Approval:Action-Reject' => 'Reject~~',
	'Approval:Approved-By' => 'Approved by %1$s~~',
	'Approval:Approved-On-behalf-of' => 'Approved by %1$s on behalf of %2$s~~',
	'Approval:Comment-Label' => 'Your comment~~',
	'Approval:Comment-Mandatory' => 'A comment must be given for rejection~~',
	'Approval:Comment-Reused' => 'Reply already made at step %1$s, with comment "%2$s"~~',
	'Approval:Comment-Tooltip' => 'Mandatory for rejection, optional for approval~~',
	'Approval:Form:AlreadyApproved' => 'Sorry, the process has already been completed with result: Approved.~~',
	'Approval:Form:AlreadyRejected' => 'Sorry, the process has already been completed with result: Rejected.~~',
	'Approval:Form:AnswerGivenBy' => 'Sorry, the reply has already been given by \'%1$s\'~~',
	'Approval:Form:AnswerRecorded-Approved' => 'Your answer has been recorded: the approval process is now complete with result APPROVED.~~',
	'Approval:Form:AnswerRecorded-Continue' => 'Your answer has been recorded. The approval process is continuing.~~',
	'Approval:Form:AnswerRecorded-Rejected' => 'Your answer has been recorded: the approval process is now complete with result REJECTED.~~',
	'Approval:Form:ApproverDeleted' => 'Sorry, the record corresponding to your identity has been deleted.~~',
	'Approval:Form:ObjectDeleted' => 'Sorry, the object of the approval has been deleted.~~',
	'Approval:Form:Ref' => 'Approval process for %1$s~~',
	'Approval:Form:StepApproved' => 'Sorry, this phase has been completed with result: Approved. The approval process is continuing...~~',
	'Approval:Form:StepRejected' => 'Sorry, this phase has been completed with result: Rejected. The approval process is continuing...~~',
	'Approval:Form:Title' => 'Approval~~',
	'Approval:Ongoing-FilterMyApprovals' => 'Show items for which my approval is being required~~',
	'Approval:Ongoing-NothingCurrently' => 'There is no ongoing approval.~~',
	'Approval:Ongoing-Title' => 'Ongoing approvals~~',
	'Approval:Ongoing-Title+' => 'Approval processes for objects of class %1$s~~',
	'Approval:Portal:Btn:Approve' => 'Approve~~',
	'Approval:Portal:Btn:Reject' => 'Reject~~',
	'Approval:Portal:CommentPlaceholder' => '~~',
	'Approval:Portal:CommentTitle' => 'Approval comment (mandatory in case of reject)~~',
	'Approval:Portal:Dlg:Approve' => 'Please confirm that you want to approve <em><span class="approval-count">?</span></em> item(s)~~',
	'Approval:Portal:Dlg:ApproveOne' => 'Please confirm that you want to approve this item~~',
	'Approval:Portal:Dlg:Btn:Approve' => 'Approve!~~',
	'Approval:Portal:Dlg:Btn:Reject' => 'Reject!~~',
	'Approval:Portal:Dlg:Reject' => 'Please confirm that you want to reject <em><span class="approval-count">?</span></em> item(s)~~',
	'Approval:Portal:Dlg:RejectOne' => 'Please confirm that you want to reject this item~~',
	'Approval:Portal:NoItem' => 'There is currently no item expecting your approval~~',
	'Approval:Portal:Success' => 'Your feedback has been recorded.~~',
	'Approval:Portal:Title' => 'Items awaiting your approval~~',
	'Approval:Portal:Title+' => 'Please select items to approve and use the buttons located at the bottom of the page~~',
	'Approval:Rejected-By' => 'Rejected by %1$s~~',
	'Approval:Rejected-On-behalf-of' => 'Rejected by %1$s on behalf of %2$s~~',
	'Approval:Remind-Btn' => 'Send a reminder...~~',
	'Approval:Remind-DlgBody' => 'The following contacts will be notified again:~~',
	'Approval:Remind-DlgTitle' => 'Send a reminder~~',
	'Approval:ReminderDone' => 'A reminder has been sent to %1$d person(s).~~',
	'Approval:Tab:End' => 'End~~',
	'Approval:Tab:End-Abort' => 'The approval process has been bypassed by %1$s at %2$s~~',
	'Approval:Tab:Error' => 'An error occured during the approval process: %1$s~~',
	'Approval:Tab:Start' => 'Start~~',
	'Approval:Tab:StepEnd-Condition-FirstApprove' => 'This step finishes on the first approval, or if 100% rejected~~',
	'Approval:Tab:StepEnd-Condition-FirstReject' => 'This step finishes on the first rejection, or if 100% approved~~',
	'Approval:Tab:StepEnd-Condition-FirstReply' => 'This step finishes on the first reply~~',
	'Approval:Tab:StepEnd-Limit' => 'Time limit (implicit result)~~',
	'Approval:Tab:StepEnd-Theoretical' => 'Theoretical time limit (duration limited to %1$s mn)~~',
	'Approval:Tab:StepSumary-Idle' => 'Not started~~',
	'Approval:Tab:StepSumary-KO' => 'Rejected~~',
	'Approval:Tab:StepSumary-KO-Timeout' => 'Rejected (timeout)~~',
	'Approval:Tab:StepSumary-OK' => 'Approved~~',
	'Approval:Tab:StepSumary-OK-Timeout' => 'Approved (timeout)~~',
	'Approval:Tab:StepSumary-Ongoing' => 'Waiting for the replies~~',
	'Approval:Tab:StepSumary-Skipped' => 'Skipped~~',
	'Approval:Tab:Title' => 'Approval status~~',
	'Class:ActionEmailApprovalRequest' => 'Notification by Email for Request Approval',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder' => 'Subject (reminder)~~',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder+' => 'Subject of the email in case a reminder is sent~~',
	'Class:ApprovalScheme' => 'ApprovalScheme~~',
	'Class:ApprovalScheme+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_comment' => 'Abort comment~~',
	'Class:ApprovalScheme/Attribute:abort_comment+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_date' => 'Abort date~~',
	'Class:ApprovalScheme/Attribute:abort_date+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_user_id' => 'Abort user id~~',
	'Class:ApprovalScheme/Attribute:abort_user_id+' => '~~',
	'Class:ApprovalScheme/Attribute:current_step' => 'Current step~~',
	'Class:ApprovalScheme/Attribute:current_step+' => '~~',
	'Class:ApprovalScheme/Attribute:ended' => 'Ended~~',
	'Class:ApprovalScheme/Attribute:ended+' => '~~',
	'Class:ApprovalScheme/Attribute:label' => 'Label~~',
	'Class:ApprovalScheme/Attribute:label+' => '~~',
	'Class:ApprovalScheme/Attribute:last_error' => 'Last error~~',
	'Class:ApprovalScheme/Attribute:last_error+' => '~~',
	'Class:ApprovalScheme/Attribute:obj_class' => 'Obj class~~',
	'Class:ApprovalScheme/Attribute:obj_class+' => '~~',
	'Class:ApprovalScheme/Attribute:obj_key' => 'Obj key~~',
	'Class:ApprovalScheme/Attribute:obj_key+' => '~~',
	'Class:ApprovalScheme/Attribute:started' => 'Started~~',
	'Class:ApprovalScheme/Attribute:started+' => '~~',
	'Class:ApprovalScheme/Attribute:status' => 'Status~~',
	'Class:ApprovalScheme/Attribute:status+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:accepted' => 'Accepted~~',
	'Class:ApprovalScheme/Attribute:status/Value:accepted+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing' => 'Ongoing~~',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:rejected' => 'Rejected~~',
	'Class:ApprovalScheme/Attribute:status/Value:rejected+' => '~~',
	'Class:ApprovalScheme/Attribute:steps' => 'Steps~~',
	'Class:ApprovalScheme/Attribute:steps+' => '~~',
	'Class:ApprovalScheme/Attribute:timeout' => 'Timeout~~',
	'Class:ApprovalScheme/Attribute:timeout+' => '~~',
	'Class:TriggerOnApprovalRequest' => 'Trigger (when an approval is requested)~~',
	'Class:TriggerOnApprovalRequest+' => 'Trigger on approval request~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request' => 'Send request to~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers' => 'Approvers only~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both' => 'Both approvers and substitutes~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes' => 'Substitutes only~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes+' => '~~',
]);
