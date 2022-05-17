/* Make the default value of StepIdSession to 1 instead of 0*/
ALTER TABLE currentsession
ALTER StepIdSession SET DEFAULT 1;